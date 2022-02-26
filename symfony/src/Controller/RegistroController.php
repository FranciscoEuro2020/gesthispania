<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request)
    {
        return $this->render('register.html.twig');           
    }
    /**
     * @Route("/", name="login")
     */
    public function login(Request $request)
    {
      return $this->render('login.html.twig');     
    }
     /**
     * @Route("/login_manually", name="loginManually")
     */
    public function loginManually(Request $request,EntityManagerInterface $entityManager)
    {

        // Respuesta por defecto
        $response = array(
            "redirect" => false,
            "errorUser" => true,
            "errorPassword" => true
        );

        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["email"]) && isset($_POST["password"])) {
                    // Obtenemos EM
                   // $em = $this->getDoctrine()->getManager();
                    $User = $entityManager->getRepository("App:User")->findOneBy(array(
                        "login" => $_POST["email"],
                        "password" => $_POST["password"],
                    ));
                   
                    if ($User) {
                        $response = array(
                            "redirect" => true,
                            "errorUser" => true,
                            'url' => 'panel?id='.$User->getId()
                        );
                       
                    } else {
                        $response = array(
                            "redirect" => false,
                            "errorUser" => true
                        );
                    }
                }
            }
           

        return new Response(json_encode($response));
    }
    /**
     * @Route("/register_manually", name="registerManually")
     */
    public function registerManually(Request $request,EntityManagerInterface $em)
    {

        // Respuesta por defecto
        $response = array(
            "redirect" => false,
            "errorUser" => true,
            "errorPassword" => true
        );

        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["email"]) && (isset($_POST["password"])) && (isset($_POST["name"])) && (isset($_POST["surname"]))){
                    $email= $_POST["email"];
                    $password= $_POST["password"];
                    $name= $_POST["name"]; 
                    $surname= $_POST["surname"];
                
                    $user = new User();
                    $user->setLogin($email);
                    $user->setPassword($password);
                    $user->setName($name);
                    $user->setSurname($surname);
                    
                    $em->persist($user);
                    $em->flush($user);

                    $response = array(
                        "redirect" => true,
                        "errorUser" => false,
                        'url' => 'home'
                    );              
                }        
            } 
            else {
                $response = array(
                    "redirect" => false,
                    "errorUser" => true
                );
            }
        return new Response(json_encode($response));
    }
   /**
     * @Route("/home", name="home")
     */
    public function home(Request $request)
    {
      return $this->render('login.html.twig');     
    }
}
