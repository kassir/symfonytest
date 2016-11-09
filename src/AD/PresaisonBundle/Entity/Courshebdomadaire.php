<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courshebdomadaire
 */
class Courshebdomadaire
{
    /**
     * @var string
     */
    private $jourcourshebdo;

    /**
     * @var \DateTime
     */
    private $heuredebutcourshebdo;

    /**
     * @var \DateTime
     */
    private $heurefincourshebdo;

    /**
     * @var integer
     */
    private $idcourshebdo;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse1;

    /**
     * @var \AD\PresaisonBundle\Entity\Niveau
     */
    private $idniveau;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Salle
     */
    private $idsalle1;

    /**
     * @var \AD\PresaisonBundle\Entity\Salle
     */
    private $idsalle;

    /**
     * @var \AD\PresaisonBundle\Entity\Professeur
     */
    private $idprof;


    /**
     * Set jourcourshebdo
     *
     * @param string $jourcourshebdo
     * @return Courshebdomadaire
     */
    public function setJourcourshebdo($jourcourshebdo)
    {
        $this->jourcourshebdo = $jourcourshebdo;

        return $this;
    }

    /**
     * Get jourcourshebdo
     *
     * @return string 
     */
    public function getJourcourshebdo()
    {
        return $this->jourcourshebdo;
    }

    /**
     * Set heuredebutcourshebdo
     *
     * @param \DateTime $heuredebutcourshebdo
     * @return Courshebdomadaire
     */
    public function setHeuredebutcourshebdo($heuredebutcourshebdo)
    {
        $this->heuredebutcourshebdo = $heuredebutcourshebdo;

        return $this;
    }

    /**
     * Get heuredebutcourshebdo
     *
     * @return \DateTime 
     */
    public function getHeuredebutcourshebdo()
    {
        return $this->heuredebutcourshebdo;
    }

    /**
     * Set heurefincourshebdo
     *
     * @param \DateTime $heurefincourshebdo
     * @return Courshebdomadaire
     */
    public function setHeurefincourshebdo($heurefincourshebdo)
    {
        $this->heurefincourshebdo = $heurefincourshebdo;

        return $this;
    }

    /**
     * Get heurefincourshebdo
     *
     * @return \DateTime 
     */
    public function getHeurefincourshebdo()
    {
        return $this->heurefincourshebdo;
    }

    /**
     * Get idcourshebdo
     *
     * @return integer 
     */
    public function getIdcourshebdo()
    {
        return $this->idcourshebdo;
    }

    /**
     * Set iddanse1
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse1
     * @return Courshebdomadaire
     */
    public function setIddanse1(\AD\PresaisonBundle\Entity\Danse $iddanse1 = null)
    {
        $this->iddanse1 = $iddanse1;

        return $this;
    }

    /**
     * Get iddanse1
     *
     * @return \AD\PresaisonBundle\Entity\Danse 
     */
    public function getIddanse1()
    {
        return $this->iddanse1;
    }

    /**
     * Set idniveau
     *
     * @param \AD\PresaisonBundle\Entity\Niveau $idniveau
     * @return Courshebdomadaire
     */
    public function setIdniveau(\AD\PresaisonBundle\Entity\Niveau $idniveau = null)
    {
        $this->idniveau = $idniveau;

        return $this;
    }

    /**
     * Get idniveau
     *
     * @return \AD\PresaisonBundle\Entity\Niveau 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Set iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     * @return Courshebdomadaire
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
     * Set idsalle1
     *
     * @param \AD\PresaisonBundle\Entity\Salle $idsalle1
     * @return Courshebdomadaire
     */
    public function setIdsalle1(\AD\PresaisonBundle\Entity\Salle $idsalle1 = null)
    {
        $this->idsalle1 = $idsalle1;

        return $this;
    }

    /**
     * Get idsalle1
     *
     * @return \AD\PresaisonBundle\Entity\Salle 
     */
    public function getIdsalle1()
    {
        return $this->idsalle1;
    }

    /**
     * Set idsalle
     *
     * @param \AD\PresaisonBundle\Entity\Salle $idsalle
     * @return Courshebdomadaire
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
     * Set idprof
     *
     * @param \AD\PresaisonBundle\Entity\Professeur $idprof
     * @return Courshebdomadaire
     */
    public function setIdprof(\AD\PresaisonBundle\Entity\Professeur $idprof = null)
    {
        $this->idprof = $idprof;

        return $this;
    }

    /**
     * Get idprof
     *
     * @return \AD\PresaisonBundle\Entity\Professeur 
     */
    public function getIdprof()
    {
        return $this->idprof;
    }
}
