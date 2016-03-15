<?php

namespace AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnoncesBundle:Default:index.html.twig');
    }
}
