<?php

namespace AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercheController extends Controller
{
    public function searchAction()
    {
        return $this->render('AnnoncesBundle:Recherche:search.html.twig', array(
            // ...
        ));
    }

}
