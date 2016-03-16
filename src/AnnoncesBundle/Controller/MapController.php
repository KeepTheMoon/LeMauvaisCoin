<?php

namespace AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapController extends Controller
{
    public function rechercheAction()
    {
        return $this->render('AnnoncesBundle:Map:recherche.html.twig', array(
            // ...
        ));
    }

}
