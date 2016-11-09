<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stagiaire
 */
class Stagiaire
{
    /**
     * @var string
     */
    private $nomstagiaire;

    /**
     * @var string
     */
    private $prenomstagiaire;

    /**
     * @var integer
     */
    private $telstagiaire;

    /**
     * @var integer
     */
    private $idstagiaire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idstage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nomstagiaire
     *
     * @param string $nomstagiaire
     * @return Stagiaire
     */
    public function setNomstagiaire($nomstagiaire)
    {
        $this->nomstagiaire = $nomstagiaire;

        return $this;
    }

    /**
     * Get nomstagiaire
     *
     * @return string 
     */
    public function getNomstagiaire()
    {
        return $this->nomstagiaire;
    }

    /**
     * Set prenomstagiaire
     *
     * @param string $prenomstagiaire
     * @return Stagiaire
     */
    public function setPrenomstagiaire($prenomstagiaire)
    {
        $this->prenomstagiaire = $prenomstagiaire;

        return $this;
    }

    /**
     * Get prenomstagiaire
     *
     * @return string 
     */
    public function getPrenomstagiaire()
    {
        return $this->prenomstagiaire;
    }

    /**
     * Set telstagiaire
     *
     * @param integer $telstagiaire
     * @return Stagiaire
     */
    public function setTelstagiaire($telstagiaire)
    {
        $this->telstagiaire = $telstagiaire;

        return $this;
    }

    /**
     * Get telstagiaire
     *
     * @return integer 
     */
    public function getTelstagiaire()
    {
        return $this->telstagiaire;
    }

    /**
     * Get idstagiaire
     *
     * @return integer 
     */
    public function getIdstagiaire()
    {
        return $this->idstagiaire;
    }

    /**
     * Add idstage
     *
     * @param \AD\PresaisonBundle\Entity\Stage $idstage
     * @return Stagiaire
     */
    public function addIdstage(\AD\PresaisonBundle\Entity\Stage $idstage)
    {
        $this->idstage[] = $idstage;

        return $this;
    }

    /**
     * Remove idstage
     *
     * @param \AD\PresaisonBundle\Entity\Stage $idstage
     */
    public function removeIdstage(\AD\PresaisonBundle\Entity\Stage $idstage)
    {
        $this->idstage->removeElement($idstage);
    }

    /**
     * Get idstage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }
}
