<?php

namespace SP\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectBundle:Default:index.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('ProjectBundle:Default:hello.html.twig', array('name' => $name));
    }
}
