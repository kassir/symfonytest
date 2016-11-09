<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglementstage
 */
class Reglementstage
{
    /**
     * @var \DateTime
     */
    private $datereglement;

    /**
     * @var integer
     */
    private $montantreglement;

    /**
     * @var string
     */
    private $etatreglement;

    /**
     * @var integer
     */
    private $idreglementstage;

    /**
     * @var \AD\PresaisonBundle\Entity\Stage
     */
    private $idstage;

    /**
     * @var \AD\PresaisonBundle\Entity\Stagiaire
     */
    private $idstagiaire;


    /**
     * Set datereglement
     *
     * @param \DateTime $datereglement
     * @return Reglementstage
     */
    public function setDatereglement($datereglement)
    {
        $this->datereglement = $datereglement;

        return $this;
    }

    /**
     * Get datereglement
     *
     * @return \DateTime 
     */
    public function getDatereglement()
    {
        return $this->datereglement;
    }

    /**
     * Set montantreglement
     *
     * @param integer $montantreglement
     * @return Reglementstage
     */
    public function setMontantreglement($montantreglement)
    {
        $this->montantreglement = $montantreglement;

        return $this;
    }

    /**
     * Get montantreglement
     *
     * @return integer 
     */
    public function getMontantreglement()
    {
        return $this->montantreglement;
    }

    /**
     * Set etatreglement
     *
     * @param string $etatreglement
     * @return Reglementstage
     */
    public function setEtatreglement($etatreglement)
    {
        $this->etatreglement = $etatreglement;

        return $this;
    }

    /**
     * Get etatreglement
     *
     * @return string 
     */
    public function getEtatreglement()
    {
        return $this->etatreglement;
    }

    /**
     * Get idreglementstage
     *
     * @return integer 
     */
    public function getIdreglementstage()
    {
        return $this->idreglementstage;
    }

    /**
     * Set idstage
     *
     * @param \AD\PresaisonBundle\Entity\Stage $idstage
     * @return Reglementstage
     */
    public function setIdstage(\AD\PresaisonBundle\Entity\Stage $idstage = null)
    {
        $this->idstage = $idstage;

        return $this;
    }

    /**
     * Get idstage
     *
     * @return \AD\PresaisonBundle\Entity\Stage 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }

    /**
     * Set idstagiaire
     *
     * @param \AD\PresaisonBundle\Entity\Stagiaire $idstagiaire
     * @return Reglementstage
     */
    public function setIdstagiaire(\AD\PresaisonBundle\Entity\Stagiaire $idstagiaire = null)
    {
        $this->idstagiaire = $idstagiaire;

        return $this;
    }

    /**
     * Get idstagiaire
     *
     * @return \AD\PresaisonBundle\Entity\Stagiaire 
     */
    public function getIdstagiaire()
    {
        return $this->idstagiaire;
    }
}
