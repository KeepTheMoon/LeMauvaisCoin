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
     * @var string
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
    public function setIddepartement($iddepartement)
    {
        $this->iddepartement = $iddepartement;

        return $this;
    }

    /**
     * Get iddepartement
     *
     * @return string 
     */
    public function getIddepartement()
    {
        return $this->iddepartement;
    }
}
