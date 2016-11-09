<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 */
class Professeur
{
    /**
     * @var string
     */
    private $nomprof;

    /**
     * @var string
     */
    private $prenomprof;

    /**
     * @var integer
     */
    private $telprof;

    /**
     * @var string
     */
    private $emailprof;

    /**
     * @var integer
     */
    private $tarifhorairecours;

    /**
     * @var integer
     */
    private $forfaithorairestage;

    /**
     * @var integer
     */
    private $idprof;


    /**
     * Set nomprof
     *
     * @param string $nomprof
     * @return Professeur
     */
    public function setNomprof($nomprof)
    {
        $this->nomprof = $nomprof;

        return $this;
    }

    /**
     * Get nomprof
     *
     * @return string 
     */
    public function getNomprof()
    {
        return $this->nomprof;
    }

    /**
     * Set prenomprof
     *
     * @param string $prenomprof
     * @return Professeur
     */
    public function setPrenomprof($prenomprof)
    {
        $this->prenomprof = $prenomprof;

        return $this;
    }

    /**
     * Get prenomprof
     *
     * @return string 
     */
    public function getPrenomprof()
    {
        return $this->prenomprof;
    }

    /**
     * Set telprof
     *
     * @param integer $telprof
     * @return Professeur
     */
    public function setTelprof($telprof)
    {
        $this->telprof = $telprof;

        return $this;
    }

    /**
     * Get telprof
     *
     * @return integer 
     */
    public function getTelprof()
    {
        return $this->telprof;
    }

    /**
     * Set emailprof
     *
     * @param string $emailprof
     * @return Professeur
     */
    public function setEmailprof($emailprof)
    {
        $this->emailprof = $emailprof;

        return $this;
    }

    /**
     * Get emailprof
     *
     * @return string 
     */
    public function getEmailprof()
    {
        return $this->emailprof;
    }

    /**
     * Set tarifhorairecours
     *
     * @param integer $tarifhorairecours
     * @return Professeur
     */
    public function setTarifhorairecours($tarifhorairecours)
    {
        $this->tarifhorairecours = $tarifhorairecours;

        return $this;
    }

    /**
     * Get tarifhorairecours
     *
     * @return integer 
     */
    public function getTarifhorairecours()
    {
        return $this->tarifhorairecours;
    }

    /**
     * Set forfaithorairestage
     *
     * @param integer $forfaithorairestage
     * @return Professeur
     */
    public function setForfaithorairestage($forfaithorairestage)
    {
        $this->forfaithorairestage = $forfaithorairestage;

        return $this;
    }

    /**
     * Get forfaithorairestage
     *
     * @return integer 
     */
    public function getForfaithorairestage()
    {
        return $this->forfaithorairestage;
    }

    /**
     * Get idprof
     *
     * @return integer 
     */
    public function getIdprof()
    {
        return $this->idprof;
    }
}
