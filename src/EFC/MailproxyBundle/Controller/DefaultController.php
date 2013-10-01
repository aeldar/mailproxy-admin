<?php

namespace EFC\MailproxyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($username)
    {
        return $this->render('EFCMailproxyBundle:Default:index.html.twig', array('username' => $username));
    }

    public function welcomeAction(){
        return new Response("Welcome to EFC");
    }
}
