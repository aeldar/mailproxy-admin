<?php

namespace EFC\MailproxyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($username)
    {
        return $this->render('EFCMailproxyBundle:Default:index.html.twig', array('username' => $username));
    }
}
