<?php

namespace LocalisationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 */
class Region
{
    /**
     * @var integer
     */
    private $idregion;

    /**
     * @var string
     */
    private $nomregion;


    /**
     * Get idregion
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idregion;
    }


    /**
     * Get idregion
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->idregion;
    }


    /**
     * Set nomregion
     *
     * @param string $nomregion
     * @return Region
     */
    public function setNomregion($nomregion)
    {
        $this->nomregion = $nomregion;

        return $this;
    }

    /**
     * Get nomregion
     *
     * @return string 
     */
    public function getNomregion()
    {
        return $this->nomregion;
    }

    /**
     * __toString()
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getNomregion();
    }
}
