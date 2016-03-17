<?php

namespace AnnoncesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="annonce")
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
     * @var string
     */
    private $aNomcat;

    /**
     * @var \UserBundle\Entity\User
     */
    private $auser;

    /**
     * @var string
     */
    private $aville;

      /**
     * @var integer
     */
    private $atel;


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
     * Set atel
     *
     * @param integer $atel
     * @return Annonce
     */
    public function setAtel($atel)
    {
        $this->atel = $atel;

        return $this;
    }

    /**
     * Get aPrix
     *
     * @return integer 
     */
    public function getAtel()
    {
        return $this->atel;
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
     * Set auser
     *
     * @param \UserBundle\Entity\User $auser
     * @return Annonce
     */
    public function setAuser(\UserBundle\Entity\User $auser )
    {
        $this->auser = $auser;

        return $this;
    }

    /**
     * Get auser
     *
     * @return \UserBundle\Entity\Utilisateures 
     */
    public function getAuser()
    {
        return $this->auser;
    }

    /**
     * Set aville
     *
     * @param string
     * @return Annonce
     */
    public function setAville(\LocalisationBundle\Entity\Ville $aville )
    {
        $this->aville = $aville;

        return $this;
    }

    /**
     * Get aville
     *
     * @return string
     */
    public function getAville()
    {
        return $this->aville;
    }
}
