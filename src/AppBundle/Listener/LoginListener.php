<?php
/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 10/10/2016
 * Time: 20:52
 */

namespace AppBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use FOS\UserBundle\Model\UserManagerInterface;

class LoginListener
{
    protected $userManager;

    public function __construct(UserManagerInterface $userManager){
        $this->userManager = $userManager;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();
        // In order to test if it works, create a file with the name login.txt in the /web path of your project
        $myfile = fopen("files/login.txt", "w");
        fwrite($myfile, 'onSecurityInteractiveLogin succesfully executed !');
        fclose($myfile);

        // do something else et iuci
        // return new Response();
    }

}