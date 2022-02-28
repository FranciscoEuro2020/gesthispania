<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends AbstractController
{
    /**
     * @Route("/panel", name="panel")
     */
    public function panel(EntityManagerInterface $entityManager,Request $request)
    {
        $response = array();
        $id = $request->get("id");
        $response = $entityManager->getRepository("App:User")->findOneById($id);
  
        return $this->render('panel.html.twig', array(
               'user' => $response,
               'id' => $id
            ));
       
    }
}