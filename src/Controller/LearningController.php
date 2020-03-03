<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface; // voor sessions

class LearningController extends AbstractController
{
    /**
     * @Route("/home", name="learning")
     */
    public function index()
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'lorem'=> $this->aboutMe(),
            'name' => 'BeCode',
        ]);
    }
    public function aboutMe(){

        return "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
    }

    /**
     * @Route("/about-me", name="aboutme")
     */
    private $username="Unknown";

    public function showMyname(){
        return $this->render('learning/about.html.twig', [
            'controller_name' => 'LearningController',
            'usernaame'=> $this->changeMyname($this->username),
        ]);
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']))
    {
        $this->username = $_POST['username'];

    /**
     * @Route("/changeMyName", name="changeMyName")
     */
    }

    public function changeMyname($this->username){

        if(!empty($this->username)||$this->username!="Unknown"){
            return $this->username;
        }else{
            $this->username="Unknown";
            return $this->username;
        }
    }

}
