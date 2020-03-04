<?php
namespace App\Controller;

use mysql_xdevapi\Session;
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
    } // om de van about-me te veranderen naar about-becode moet je dat in het eerste stuk doen
    /**
     * @Route("/about-becode", name="aboutme")
     */
    public function aboutMe(){
        return "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
    }


    /**
     * @Route("/", name="changeName")
     */
    public function changeMyname(){
        return $this->render('learning/changeMyName.html.twig');
        }
}
/* <?php
// Niels code - - interesting example

namespace App\Controller;

use App\Entity\AboutMe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
/*public function index()
{

    // instantiate objects
    $session = new Session();
    $user = new AboutMe();
    $user->setText('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
    $user->setName('Unknown');

    // change username if session
    $userName = $session->get('name');
    if (isset($userName)) {
        $user->setName($userName);
    }

    // If button pressed, reroute
    if (isset($_POST['changeName'])) {
        return $this->redirectToRoute('change-name');
    }

    // render page
    return $this->render('homepage/index.html.twig', [
        'name' => $user->getName(), 'userText' => $user->getText(),
    ]);
}
}*/