<?php

namespace LocalisationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 */
class Departement
{
    /**
     * @var string
     */
    private $iddepartement;

    /**
     * @var string
     */
    private $nomdepartement;

    /**
     * @var \LocalisationBundle\Entity\Region
     */
    private $idregion;


    /**
     * Get iddepartement
     *
     * @return string 
     */
    public function getId()
    {
        return $this->iddepartement;
    }

      /**
     * Get iddepartement
     *
     * @return string 
     */
    public function getIdDepartement()
    {
        return $this->iddepartement;
    }

    /**
     * Set nomdepartement
     *
     * @param string $nomdepartement
     * @return Departement
     */
    public function setNomdepartement($nomdepartement)
    {
        $this->nomdepartement = $nomdepartement;

        return $this;
    }

    /**
     * Get nomdepartement
     *
     * @return string 
     */
    public function getNomdepartement()
    {
        return $this->nomdepartement;
    }

    /**
     * Set idregion
     *
     * @param \LocalisationBundle\Entity\Region $idregion
     * @return Departement
     */
    public function setIdregion(\LocalisationBundle\Entity\Region $idregion = null)
    {
        $this->idregion = $idregion;

        return $this;
    }

    /**
     * Get idregion
     *
     * @return \LocalisationBundle\Entity\Region 
     */
    public function getIdregion()
    {
        return $this->idregion;
    }
}
