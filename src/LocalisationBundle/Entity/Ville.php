<?php

namespace LocalisationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 */
class Ville
{
    /**
     * @var string
     */
    private $idville;

    /**
     * @var integer
     */
    private $codepostal;

    /**
     * @var string
     */
    private $nomville;

    /**
     * @var @var \LocalisationBundle\Entity\Departement
     */
    private $iddepartement;


    /**
     * Get idville
     *
     * @return string 
     */
    public function getIdville()
    {
        return $this->idville;
    }

      /**
     * Get idville
     *
     * @return string 
     */
    public function getId()
    {
        return $this->idville;
    }
    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Ville
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set nomville
     *
     * @param string $nomville
     * @return Ville
     */
    public function setNomville($nomville)
    {
        $this->nomville = $nomville;

        return $this;
    }

    /**
     * Get nomville
     *
     * @return string 
     */
    public function getNomville()
    {
        return $this->nomville;
    }

    /**
     * Set iddepartement
     *
     * @param string $iddepartement
     * @return Ville
     */
    public function setIddepartement(\LocalisationBundle\Entity\Departement $iddepartement = null)
    {
        $this->iddepartement = $iddepartement;

        return $this;
    }

    /**
     * Get iddepartement
     *
     * @return \LocalisationBundle\Entity\Departement
     */
    public function getIddepartement()
    {
        return $this->iddepartement;
    }

    /**
     * __toString()
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->nomville;
    }
}
