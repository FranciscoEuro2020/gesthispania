<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\Register;
use App\Entity\Subject;
use App\Entity\SubjectsCourse;
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
        $response = $entityManager->getRepository("App:Course")->findAll();
              
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
        $course = $entityManager->getRepository("App:Course")->findAll();   
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
                    $course= $_POST["course"];
                    $title= $_POST["title"];
                    $month= $_POST["month"]; 
                    $year= $_POST["year"];
                
                    $courseObject = new Course();
                    $courseObject->setCourse($course);
                    $courseObject->setTitle($title);
                    $courseObject->setMonth($month);
                    $courseObject->setYear($year);
                    
                    $em->persist($courseObject);
                    $em->flush($courseObject);

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
    /**
     * @Route("/assign_manually", name="asssignManually")
     */
    public function asssignManually(Request $request,EntityManagerInterface $em)
    {

        // Respuesta por defecto
        $response = array(
            "redirect" => false,
            "errorUser" => true,
            "errorPassword" => true
        );

        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["course"]) && (isset($_POST["subject"]))){
                    $course= $_POST["course"];
                    $subject= $_POST["subject"];
               
                    $SubjectsCourse = $em->getRepository("App:SubjectsCourse")->findOneBy(array(
                        "idcourse" => $course,
                        "idsubject" => $subject,
                    ));
                   
                    if(!$SubjectsCourse){
                        $sub = new SubjectsCourse();
                        $sub->setIdcourse($course);
                        $sub->setIdsubject($subject);                                        
                        $em->persist($sub);
                        $em->flush($sub);

                        $response = array(
                            "redirect" => true,
                            "error" => false,
                            'url' => 'home'
                        );    
                    }  
                    else{
                        $response = array(
                            "redirect" => false,
                            "error" => true
                        );    
                    }        
                }        
            } 
            else {
                $response = array(
                    "redirect" => false,
                    "error" => true
                );
            }
        return new Response(json_encode($response));
    }

     /**
     * @Route("/listCourseUser", name="listCourseUser")
     */
    public function listCourseUser(EntityManagerInterface $em,Request $request)
    {
        $iduser = $request->get("id");
        return $this->render('courseUserList.html.twig' ,array(
            'id' => $iduser         
         ));        
       
    }
    /**
     * @Route("/listCourseUserManually", name="listCourseUserManually")
     */
    public function listCourseUserManually(EntityManagerInterface $entityManager)
    {
        $response = array();
        $array = array();
        $response = $entityManager->getRepository("App:Course")->findAll();
       
        foreach($response as $key => $dato){
            $id = $dato->getId();      
            $combination = $entityManager->getRepository("App:SubjectsCourse")->getsubjectCourseList($id);
            foreach($combination as $key2 => $dato2){
                $array [$key][$key2] = [
                'course' =>  $dato->getTitle().'('.$dato->getCourse().')',
                'signature' =>  $dato2['signature'], 
                'idcourse' =>  $id,
                'idsubject' => $dato2['idsubject']
                ];               
            }           
        }   
       
        return new Response(json_encode($array));
    }
     /**
     * @Route("/assignSubject", name="assignSubject")
     */
    public function assignSubject(EntityManagerInterface $em,Request $request)
    {
        $response = array();
        $idcourse = $request->get("idcourse");
        $idsubject = $request->get("idsubject");
        $iduser = $request->get("iduser");
       
            
        $checkAssignSubject = array();
        $checkAssignSubject = $em->getRepository("App:Register")->findOneBy(array(
            "idcourse" => $idcourse,
            "idsubject" => $idsubject,
            "iduser" => $iduser
        ));
        if(!$checkAssignSubject){
            $sub = new Register();
            $sub->setIdcourse($idcourse);
            $sub->setIdsubject($idsubject);   
            $sub->setIduser($iduser);                                     
            $em->persist($sub);
            $em->flush($sub);
            
            $response = array(
                "redirect" => true,
                "error" => true
            );    
        }  
        else{
            $response = array(
                "redirect" => false,
                "error" => false
            );    
        }   
        
        return new Response(json_encode($response));
       
    }
    /**
     * @Route("/listCourseAs", name="listCourseAssign")
     */
    public function listCourseAssign(EntityManagerInterface $entityManager,Request $request)
    {
        $response = array();
   
        
            $iduser = $request->get("id"); 
            
            $combination = $entityManager->getRepository("App:SubjectsCourse")->getsubjectCourseListAssign($iduser);
            print_r($combination);
            return $this->render('myCourse.html.twig' ,array(
                'data' => $combination ,
                'id' => $iduser          
             ));        
           
       
    }
}