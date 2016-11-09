<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 */
class Saison
{
    /**
     * @var integer
     */
    private $annee;

    /**
     * @var integer
     */
    private $tarifadhesion;

    /**
     * @var integer
     */
    private $idsaison;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idadherent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idadherent = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Saison
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set tarifadhesion
     *
     * @param integer $tarifadhesion
     * @return Saison
     */
    public function setTarifadhesion($tarifadhesion)
    {
        $this->tarifadhesion = $tarifadhesion;

        return $this;
    }

    /**
     * Get tarifadhesion
     *
     * @return integer 
     */
    public function getTarifadhesion()
    {
        return $this->tarifadhesion;
    }

    /**
     * Get idsaison
     *
     * @return integer 
     */
    public function getIdsaison()
    {
        return $this->idsaison;
    }

    /**
     * Add idadherent
     *
     * @param \AD\PresaisonBundle\Entity\Adherent $idadherent
     * @return Saison
     */
    public function addIdadherent(\AD\PresaisonBundle\Entity\Adherent $idadherent)
    {
        $this->idadherent[] = $idadherent;

        return $this;
    }

    /**
     * Remove idadherent
     *
     * @param \AD\PresaisonBundle\Entity\Adherent $idadherent
     */
    public function removeIdadherent(\AD\PresaisonBundle\Entity\Adherent $idadherent)
    {
        $this->idadherent->removeElement($idadherent);
    }

    /**
     * Get idadherent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdadherent()
    {
        return $this->idadherent;
    }
}
