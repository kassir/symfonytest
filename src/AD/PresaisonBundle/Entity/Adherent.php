<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 */
class Adherent
{
    /**
     * @var string
     */
    private $nomadherent;

    /**
     * @var string
     */
    private $prenomadherent;

    /**
     * @var \DateTime
     */
    private $datenaissadherent;

    /**
     * @var integer
     */
    private $teladherent;

    /**
     * @var string
     */
    private $emailadherent;

    /**
     * @var integer
     */
    private $idadherent;

    /**
     * @var \AD\PresaisonBundle\Entity\Reduction
     */
    private $idreduction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idsaison;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idsaison = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nomadherent
     *
     * @param string $nomadherent
     * @return Adherent
     */
    public function setNomadherent($nomadherent)
    {
        $this->nomadherent = $nomadherent;

        return $this;
    }

    /**
     * Get nomadherent
     *
     * @return string 
     */
    public function getNomadherent()
    {
        return $this->nomadherent;
    }

    /**
     * Set prenomadherent
     *
     * @param string $prenomadherent
     * @return Adherent
     */
    public function setPrenomadherent($prenomadherent)
    {
        $this->prenomadherent = $prenomadherent;

        return $this;
    }

    /**
     * Get prenomadherent
     *
     * @return string 
     */
    public function getPrenomadherent()
    {
        return $this->prenomadherent;
    }

    /**
     * Set datenaissadherent
     *
     * @param \DateTime $datenaissadherent
     * @return Adherent
     */
    public function setDatenaissadherent($datenaissadherent)
    {
        $this->datenaissadherent = $datenaissadherent;

        return $this;
    }

    /**
     * Get datenaissadherent
     *
     * @return \DateTime 
     */
    public function getDatenaissadherent()
    {
        return $this->datenaissadherent;
    }

    /**
     * Set teladherent
     *
     * @param integer $teladherent
     * @return Adherent
     */
    public function setTeladherent($teladherent)
    {
        $this->teladherent = $teladherent;

        return $this;
    }

    /**
     * Get teladherent
     *
     * @return integer 
     */
    public function getTeladherent()
    {
        return $this->teladherent;
    }

    /**
     * Set emailadherent
     *
     * @param string $emailadherent
     * @return Adherent
     */
    public function setEmailadherent($emailadherent)
    {
        $this->emailadherent = $emailadherent;

        return $this;
    }

    /**
     * Get emailadherent
     *
     * @return string 
     */
    public function getEmailadherent()
    {
        return $this->emailadherent;
    }

    /**
     * Get idadherent
     *
     * @return integer 
     */
    public function getIdadherent()
    {
        return $this->idadherent;
    }

    /**
     * Set idreduction
     *
     * @param \AD\PresaisonBundle\Entity\Reduction $idreduction
     * @return Adherent
     */
    public function setIdreduction(\AD\PresaisonBundle\Entity\Reduction $idreduction = null)
    {
        $this->idreduction = $idreduction;

        return $this;
    }

    /**
     * Get idreduction
     *
     * @return \AD\PresaisonBundle\Entity\Reduction 
     */
    public function getIdreduction()
    {
        return $this->idreduction;
    }

    /**
     * Add idsaison
     *
     * @param \AD\PresaisonBundle\Entity\Saison $idsaison
     * @return Adherent
     */
    public function addIdsaison(\AD\PresaisonBundle\Entity\Saison $idsaison)
    {
        $this->idsaison[] = $idsaison;

        return $this;
    }

    /**
     * Remove idsaison
     *
     * @param \AD\PresaisonBundle\Entity\Saison $idsaison
     */
    public function removeIdsaison(\AD\PresaisonBundle\Entity\Saison $idsaison)
    {
        $this->idsaison->removeElement($idsaison);
    }

    /**
     * Get idsaison
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdsaison()
    {
        return $this->idsaison;
    }
}
