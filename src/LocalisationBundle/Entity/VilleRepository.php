<?php


namespace LocalisationBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class VilleRepository extends EntityRepository
{
  public function findByDep($idDep)
  {

  	$qb = this->createQueryBuilder('d'); 

  // $qb->where('a.aville = :author')
  //      ->setParameter('author', $author)
  //    ->andWhere('a.date < :year')
  //      ->setParameter('year', $year)
  //    ->orderBy('a.date', 'DESC')
  // ;

  return $qb
    ->getQuery()
    ->getResult()
  ;


  }
}