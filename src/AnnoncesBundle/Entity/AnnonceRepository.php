<?php
// src/AnnoncesBundle/Entity/AnnonceRepository.php

namespace AnnoncesBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AnnonceRepository extends EntityRepository
{
  public function findByRegion($idRegion)
  {

  	$qb = this->createQueryBuilder('a'); 

  $qb->where('a.aville = :author')
       ->setParameter('author', $author)
     ->andWhere('a.date < :year')
       ->setParameter('year', $year)
     ->orderBy('a.date', 'DESC')
  ;

  return $qb
    ->getQuery()
    ->getResult()
  ;


  }
}