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

// this is the link to the sessions-page : https://symfony.com/doc/current/components/http_foundation/sessions.html
/*// here an example of how to deploy it, you have to make a new object: new Session(); on each page you want to use a value out of te session (get) or change a value out of a session (get)

use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();
$session->start();

// set and get session attributes
$session->set('name', 'Drak');
$session->get('name');

// set flash messages
$session->getFlashBag()->add('notice', 'Profile updated');

// retrieve messages
foreach ($session->getFlashBag()->get('notice', []) as $message) {
    echo '<div class="flash-notice">'.$message.'</div>';
}
*/