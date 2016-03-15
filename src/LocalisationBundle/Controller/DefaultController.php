<?php

namespace LocalisationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocalisationBundle:Default:index.html.twig');
    }
}
