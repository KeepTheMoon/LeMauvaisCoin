<?php

namespace AnnoncesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AnnoncesBundle\Entity\Categorie;
use AnnoncesBundle\Form\CategorieType;

class RechercheController extends Controller
{
    

	// $em = $this->get('doctrine.orm.entity_manager');
 //    	$queryBuilder = $this->getDoctrine()->getManager()->getRepository('AnnoncesBundle:Annonce');

 //    	// On n'ajoute pas de critère ou tri particulier, la construction
 //    	// de notre requête est finie
 //    	  $user = $this->get('security.token_storage')->getToken()->getUser();
 //    	// On récupère la Query à partir du QueryBuilder
 //   		 $query = $queryBuilder->findByAuser($user);


 //    	// On récupère les résultats à partir de la Query
 //    	$results = $query;

 //       return $this->render('AnnoncesBundle:MesAnnonces:mes_annonces.html.twig', array( 
 //            'annonces' => $results
 //        ));

     

 


    public function searchAction()
    {
      
        $res = findByRegion(82);
        echo 'res :';
        echo res;
            // ...
        ));
    }

}
