<?php

namespace AnnoncesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var string
     */
    private $catNomcat;


    /**
     * Get catNomcat
     *
     * @return string 
     */
    public function getCatNomcat()
    {
        return $this->catNomcat;
    }
}
