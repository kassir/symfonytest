<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soiree
 */
class Soiree
{
    /**
     * @var \DateTime
     */
    private $datesoiree;

    /**
     * @var \DateTime
     */
    private $heuredebutsoiree;

    /**
     * @var \DateTime
     */
    private $heurefinsoiree;

    /**
     * @var string
     */
    private $dressecode;

    /**
     * @var integer
     */
    private $tarifsoiree;

    /**
     * @var integer
     */
    private $idsoiree;

    /**
     * @var \AD\PresaisonBundle\Entity\Lieu
     */
    private $idlieu;


    /**
     * Set datesoiree
     *
     * @param \DateTime $datesoiree
     * @return Soiree
     */
    public function setDatesoiree($datesoiree)
    {
        $this->datesoiree = $datesoiree;

        return $this;
    }

    /**
     * Get datesoiree
     *
     * @return \DateTime 
     */
    public function getDatesoiree()
    {
        return $this->datesoiree;
    }

    /**
     * Set heuredebutsoiree
     *
     * @param \DateTime $heuredebutsoiree
     * @return Soiree
     */
    public function setHeuredebutsoiree($heuredebutsoiree)
    {
        $this->heuredebutsoiree = $heuredebutsoiree;

        return $this;
    }

    /**
     * Get heuredebutsoiree
     *
     * @return \DateTime 
     */
    public function getHeuredebutsoiree()
    {
        return $this->heuredebutsoiree;
    }

    /**
     * Set heurefinsoiree
     *
     * @param \DateTime $heurefinsoiree
     * @return Soiree
     */
    public function setHeurefinsoiree($heurefinsoiree)
    {
        $this->heurefinsoiree = $heurefinsoiree;

        return $this;
    }

    /**
     * Get heurefinsoiree
     *
     * @return \DateTime 
     */
    public function getHeurefinsoiree()
    {
        return $this->heurefinsoiree;
    }

    /**
     * Set dressecode
     *
     * @param string $dressecode
     * @return Soiree
     */
    public function setDressecode($dressecode)
    {
        $this->dressecode = $dressecode;

        return $this;
    }

    /**
     * Get dressecode
     *
     * @return string 
     */
    public function getDressecode()
    {
        return $this->dressecode;
    }

    /**
     * Set tarifsoiree
     *
     * @param integer $tarifsoiree
     * @return Soiree
     */
    public function setTarifsoiree($tarifsoiree)
    {
        $this->tarifsoiree = $tarifsoiree;

        return $this;
    }

    /**
     * Get tarifsoiree
     *
     * @return integer 
     */
    public function getTarifsoiree()
    {
        return $this->tarifsoiree;
    }

    /**
     * Get idsoiree
     *
     * @return integer 
     */
    public function getIdsoiree()
    {
        return $this->idsoiree;
    }

    /**
     * Set idlieu
     *
     * @param \AD\PresaisonBundle\Entity\Lieu $idlieu
     * @return Soiree
     */
    public function setIdlieu(\AD\PresaisonBundle\Entity\Lieu $idlieu = null)
    {
        $this->idlieu = $idlieu;

        return $this;
    }

    /**
     * Get idlieu
     *
     * @return \AD\PresaisonBundle\Entity\Lieu 
     */
    public function getIdlieu()
    {
        return $this->idlieu;
    }
}
