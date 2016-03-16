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

    public function mesAnnoncesAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT something FROM somethingelse WHERE id = :id");
        $statement->bindValue('id', 123);
        $statement->execute();
        $results = $statement->fetchAll();


        return $this->render('AnnoncesBundle:Recherche:mes_annonces.html.twig', array(
            // ...
        ));
    }

}
