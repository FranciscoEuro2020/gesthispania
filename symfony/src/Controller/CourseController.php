<?php

namespace App\Controller;

use App\Entity\Curso;
use App\Entity\Subject;
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
    /**
     * @Route("addSubject", name="addSubject")
     */
    public function addSubject(EntityManagerInterface $entityManager)
    {
        $subject = array();
        $subject = $entityManager->getRepository("App:Subject")->findAll();   

        $course = array();
        $course = $entityManager->getRepository("App:Curso")->findAll();   
        return $this->render('subjectCourse.html.twig', array(
            'subject' => $subject,
            'course' => $course,
         ));   
    }
    /**
     * @Route("/course_manually", name="courseManually")
     */
    public function courseManually(Request $request,EntityManagerInterface $em)
    {

        // Respuesta por defecto
        $response = array(
            "redirect" => false,
            "errorUser" => true,
            "errorPassword" => true
        );

        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["course"]) && (isset($_POST["title"])) && (isset($_POST["month"])) && (isset($_POST["year"]))){
                    $curso= $_POST["course"];
                    $title= $_POST["title"];
                    $month= $_POST["month"]; 
                    $year= $_POST["year"];
                
                    $course = new Curso();
                    $course->setCurso($curso);
                    $course->setTitle($title);
                    $course->setMonth($month);
                    $course->setYear($year);
                    
                    $em->persist($course);
                    $em->flush($course);

                    $response = array(
                        "redirect" => true,
                        "errorCourse" => false,
                        'url' => 'home'
                    );              
                }        
            } 
            else {
                $response = array(
                    "redirect" => false,
                    "errorCourse" => true
                );
            }
        return new Response(json_encode($response));
    }
 /**
     * @Route("/subject_manually", name="subjectManually")
     */
    public function subjectManually(Request $request,EntityManagerInterface $em)
    {

        // Respuesta por defecto
        $response = array(
            "redirect" => false,
            "errorUser" => true,
            "errorPassword" => true
        );

        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["name"]) && (isset($_POST["credit"]))  && (isset($_POST["duration"]))){
                    $name= $_POST["name"];
                    $credit= $_POST["credit"];
                    $duration= $_POST["duration"]; 
                    
                
                    $sub = new Subject();
                    $sub->setName($name);
                    $sub->setCredits($credit);
                    $sub->setDuration($duration);
                   
                    
                    $em->persist($sub);
                    $em->flush($sub);

                    $response = array(
                        "redirect" => true,
                        "errorCourse" => false,
                        'url' => 'home'
                    );              
                }        
            } 
            else {
                $response = array(
                    "redirect" => false,
                    "errorCourse" => true
                );
            }
        return new Response(json_encode($response));
    }
}