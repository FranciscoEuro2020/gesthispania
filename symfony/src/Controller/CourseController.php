<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/course", name="course")
     */
    public function course(Request $request)
    {
        return $this->render('course.html.twig');           
    }
     /**
     * @Route("/listC", name="listCourse")
     */
    public function listCourse(EntityManagerInterface $entityManager)
    {
        $response = array();
        $response = $entityManager->getRepository("App:Curso")->findAll();
              
        return $this->render('courseList.html.twig', array(
              'course' => $response,
           ));
    }
    /**
     * @Route("subjectRegister", name="subjectRegister")
     */
    public function subjectRegister(Request $request)
    {
        return $this->render('subject.html.twig');           
    }
     /**
     * @Route("/listSubject", name="listSubject")
     */
    public function listSubject(EntityManagerInterface $entityManager)
    {
        $response = array();
        $response = $entityManager->getRepository("App:Subject")->findAll();
               
        return $this->render('subjectList.html.twig', array(
              'subject' => $response,
           ));
    }
}