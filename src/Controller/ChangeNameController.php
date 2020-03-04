<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class ChangeNameController extends AbstractController
{
    /**
     * @Route("change-name", name="change-name")
     */
    private $username="Unknown";
    private function getName(){
        return $this->username;
    }

    public function showMyname()
    {

        // if name entered, store in session and redirect
        if (isset($_POST['username'])) {
            $session = new Session();
            $session->set('username', $_POST['username']);
        // dit nog aan passen, die doelpagina nakijken en eventueel aanpassen
            return $this->render('learning/showName.html.twig', [
                'username' => $this->getName()
            //return $this->redirectToRoute('homepage');
        }else{
            return $this->redirectToRoute('changeName', ['username' => $this->username]);
        }
        // die eventueel ook nog aanpassen die doelpagina nog nakijken en eventueel aanpassen
        return $this->render('changeMyName.html.twig');
    }

}