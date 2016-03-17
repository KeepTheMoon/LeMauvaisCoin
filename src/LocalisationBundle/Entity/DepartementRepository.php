<?php


namespace LocalisationBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class DepartementRepository extends EntityRepository
{
  public function findByReg($idReg)
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