<?php
// src/AnnoncesBundle/Entity/AnnonceRepository.php

namespace AnnoncesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AnnonceRepository extends EntityRepository
{

  public function findByRegion($idRegion)
  {

  $query = $this->_em->createQuery('SELECT * FROM AnnoncesBundle:Annonce  NATURAL JOIN LocalisationBundle:Ville
    WHERE aIdVille = IdVille ');
  $results = $query->getResult();

  echo $results;
  return $results;
  

  }
}