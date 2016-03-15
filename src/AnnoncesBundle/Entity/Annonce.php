<?php

namespace AnnoncesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \UserBundle\Entity\User;


/**
 * Annonce
 */
class Annonce
{
    /**
     * @var integer
     */
    private $aId;

    /**
     * @var string
     */
    private $aTitre;

    /**
     * @var string
     */
    private $aDescription;

    /**
     * @var integer
     */
    private $aPrix;

    /**
     * @var string
     */
    private $aImage;

    /**
     * @var boolean
     */
    private $aProfessionnel;

    /**
     * @var boolean
     */
    private $aType;

    /**
     * @var \AnnoncesBundle\Entity\Utilisateures
     */
    private $auser;

    /**
     * @var \AnnoncesBundle\Entity\Categorie
     */
    private $aNomcat;

    /**
     * @var \AnnoncesBundle\Entity\Ville
     */
    private $aville;


    /**
     * Get aId
     *
     * @return integer 
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * Set aTitre
     *
     * @param string $aTitre
     * @return Annonce
     */
    public function setATitre($aTitre)
    {
        $this->aTitre = $aTitre;

        return $this;
    }

    /**
     * Get aTitre
     *
     * @return string 
     */
    public function getATitre()
    {
        return $this->aTitre;
    }

    /**
     * Set aDescription
     *
     * @param string $aDescription
     * @return Annonce
     */
    public function setADescription($aDescription)
    {
        $this->aDescription = $aDescription;

        return $this;
    }

    /**
     * Get aDescription
     *
     * @return string 
     */
    public function getADescription()
    {
        return $this->aDescription;
    }

    /**
     * Set aPrix
     *
     * @param integer $aPrix
     * @return Annonce
     */
    public function setAPrix($aPrix)
    {
        $this->aPrix = $aPrix;

        return $this;
    }

    /**
     * Get aPrix
     *
     * @return integer 
     */
    public function getAPrix()
    {
        return $this->aPrix;
    }

    /**
     * Set aImage
     *
     * @param string $aImage
     * @return Annonce
     */
    public function setAImage($aImage)
    {
        $this->aImage = $aImage;

        return $this;
    }

    /**
     * Get aImage
     *
     * @return string 
     */
    public function getAImage()
    {
        return $this->aImage;
    }

    /**
     * Set aProfessionnel
     *
     * @param boolean $aProfessionnel
     * @return Annonce
     */
    public function setAProfessionnel($aProfessionnel)
    {
        $this->aProfessionnel = $aProfessionnel;

        return $this;
    }

    /**
     * Get aProfessionnel
     *
     * @return boolean 
     */
    public function getAProfessionnel()
    {
        return $this->aProfessionnel;
    }


    /**
     * Get aIdville
     *
     * @return string 
     */
    public function getAIdVille(){
        return ($this->aville);
    }
    /**
     * Set aType
     *
     * @param boolean $aType
     * @return Annonce
     */
    public function setAType($aType)
    {
        $this->aType = $aType;

        return $this;
    }

    /**
     * Get aType
     *
     * @return boolean 
     */
    public function getAType()
    {
        return $this->aType;
    }

    /**
     * Set auser
     *
     * @param \AnnoncesBundle\Entity\Utilisateures $auser
     * @return Annonce
     */
    public function setAuser(\AnnoncesBundle\Entity\Utilisateures $auser = null)
    {
        $this->auser = $auser;

        return $this;
    }

    /**
     * Get auser
     *
     * @return \AnnoncesBundle\Entity\Utilisateures 
     */
    public function getAuser()
    {
        return $this->auser;
    }

    /**
     * Set aNomcat
     *
     * @param \AnnoncesBundle\Entity\Categorie $aNomcat
     * @return Annonce
     */
    public function setANomcat(\AnnoncesBundle\Entity\Categorie $aNomcat = null)
    {
        $this->aNomcat = $aNomcat;

        return $this;
    }

    /**
     * Get aNomcat
     *
     * @return \AnnoncesBundle\Entity\Categorie 
     */
    public function getANomcat()
    {
        return $this->aNomcat;
    }

    /**
     * Set aville
     *
     * @param \AnnoncesBundle\Entity\Ville $aville
     * @return Annonce
     */
    public function setAville(\AnnoncesBundle\Entity\Ville $aville = null)
    {
        $this->aville = $aville;

        return $this;
    }

    /**
     * Get aville
     *
     * @return \AnnoncesBundle\Entity\Ville 
     */
    public function getAville()
    {
        return $this->aville;
    }
}
