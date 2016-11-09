<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 */
class Stage
{
    /**
     * @var \DateTime
     */
    private $datestage;

    /**
     * @var \DateTime
     */
    private $heuredebutstage;

    /**
     * @var \DateTime
     */
    private $heurefinstage;

    /**
     * @var integer
     */
    private $tarifstage;

    /**
     * @var integer
     */
    private $plafond;

    /**
     * @var integer
     */
    private $seuilviabilite;

    /**
     * @var integer
     */
    private $delaipreinscription;

    /**
     * @var integer
     */
    private $montantpreinscription;

    /**
     * @var integer
     */
    private $idstage;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Salle
     */
    private $idsalle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idniveau;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idstagiaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idniveau = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idstagiaire = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datestage
     *
     * @param \DateTime $datestage
     * @return Stage
     */
    public function setDatestage($datestage)
    {
        $this->datestage = $datestage;

        return $this;
    }

    /**
     * Get datestage
     *
     * @return \DateTime 
     */
    public function getDatestage()
    {
        return $this->datestage;
    }

    /**
     * Set heuredebutstage
     *
     * @param \DateTime $heuredebutstage
     * @return Stage
     */
    public function setHeuredebutstage($heuredebutstage)
    {
        $this->heuredebutstage = $heuredebutstage;

        return $this;
    }

    /**
     * Get heuredebutstage
     *
     * @return \DateTime 
     */
    public function getHeuredebutstage()
    {
        return $this->heuredebutstage;
    }

    /**
     * Set heurefinstage
     *
     * @param \DateTime $heurefinstage
     * @return Stage
     */
    public function setHeurefinstage($heurefinstage)
    {
        $this->heurefinstage = $heurefinstage;

        return $this;
    }

    /**
     * Get heurefinstage
     *
     * @return \DateTime 
     */
    public function getHeurefinstage()
    {
        return $this->heurefinstage;
    }

    /**
     * Set tarifstage
     *
     * @param integer $tarifstage
     * @return Stage
     */
    public function setTarifstage($tarifstage)
    {
        $this->tarifstage = $tarifstage;

        return $this;
    }

    /**
     * Get tarifstage
     *
     * @return integer 
     */
    public function getTarifstage()
    {
        return $this->tarifstage;
    }

    /**
     * Set plafond
     *
     * @param integer $plafond
     * @return Stage
     */
    public function setPlafond($plafond)
    {
        $this->plafond = $plafond;

        return $this;
    }

    /**
     * Get plafond
     *
     * @return integer 
     */
    public function getPlafond()
    {
        return $this->plafond;
    }

    /**
     * Set seuilviabilite
     *
     * @param integer $seuilviabilite
     * @return Stage
     */
    public function setSeuilviabilite($seuilviabilite)
    {
        $this->seuilviabilite = $seuilviabilite;

        return $this;
    }

    /**
     * Get seuilviabilite
     *
     * @return integer 
     */
    public function getSeuilviabilite()
    {
        return $this->seuilviabilite;
    }

    /**
     * Set delaipreinscription
     *
     * @param integer $delaipreinscription
     * @return Stage
     */
    public function setDelaipreinscription($delaipreinscription)
    {
        $this->delaipreinscription = $delaipreinscription;

        return $this;
    }

    /**
     * Get delaipreinscription
     *
     * @return integer 
     */
    public function getDelaipreinscription()
    {
        return $this->delaipreinscription;
    }

    /**
     * Set montantpreinscription
     *
     * @param integer $montantpreinscription
     * @return Stage
     */
    public function setMontantpreinscription($montantpreinscription)
    {
        $this->montantpreinscription = $montantpreinscription;

        return $this;
    }

    /**
     * Get montantpreinscription
     *
     * @return integer 
     */
    public function getMontantpreinscription()
    {
        return $this->montantpreinscription;
    }

    /**
     * Get idstage
     *
     * @return integer 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }

    /**
     * Set iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     * @return Stage
     */
    public function setIddanse(\AD\PresaisonBundle\Entity\Danse $iddanse = null)
    {
        $this->iddanse = $iddanse;

        return $this;
    }

    /**
     * Get iddanse
     *
     * @return \AD\PresaisonBundle\Entity\Danse 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }

    /**
     * Set idsalle
     *
     * @param \AD\PresaisonBundle\Entity\Salle $idsalle
     * @return Stage
     */
    public function setIdsalle(\AD\PresaisonBundle\Entity\Salle $idsalle = null)
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    /**
     * Get idsalle
     *
     * @return \AD\PresaisonBundle\Entity\Salle 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Add idniveau
     *
     * @param \AD\PresaisonBundle\Entity\Niveau $idniveau
     * @return Stage
     */
    public function addIdniveau(\AD\PresaisonBundle\Entity\Niveau $idniveau)
    {
        $this->idniveau[] = $idniveau;

        return $this;
    }

    /**
     * Remove idniveau
     *
     * @param \AD\PresaisonBundle\Entity\Niveau $idniveau
     */
    public function removeIdniveau(\AD\PresaisonBundle\Entity\Niveau $idniveau)
    {
        $this->idniveau->removeElement($idniveau);
    }

    /**
     * Get idniveau
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Add idstagiaire
     *
     * @param \AD\PresaisonBundle\Entity\Stagiaire $idstagiaire
     * @return Stage
     */
    public function addIdstagiaire(\AD\PresaisonBundle\Entity\Stagiaire $idstagiaire)
    {
        $this->idstagiaire[] = $idstagiaire;

        return $this;
    }

    /**
     * Remove idstagiaire
     *
     * @param \AD\PresaisonBundle\Entity\Stagiaire $idstagiaire
     */
    public function removeIdstagiaire(\AD\PresaisonBundle\Entity\Stagiaire $idstagiaire)
    {
        $this->idstagiaire->removeElement($idstagiaire);
    }

    /**
     * Get idstagiaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdstagiaire()
    {
        return $this->idstagiaire;
    }
}
