<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 */
class Salle
{
    /**
     * @var string
     */
    private $nomsalle;

    /**
     * @var integer
     */
    private $capacite;

    /**
     * @var integer
     */
    private $idsalle;

    /**
     * @var \AD\PresaisonBundle\Entity\Lieu
     */
    private $idlieu;


    /**
     * Set nomsalle
     *
     * @param string $nomsalle
     * @return Salle
     */
    public function setNomsalle($nomsalle)
    {
        $this->nomsalle = $nomsalle;

        return $this;
    }

    /**
     * Get nomsalle
     *
     * @return string 
     */
    public function getNomsalle()
    {
        return $this->nomsalle;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Get idsalle
     *
     * @return integer 
     */
    public function getIdsalle()
    {
        return $this->idsalle;
    }

    /**
     * Set idlieu
     *
     * @param \AD\PresaisonBundle\Entity\Lieu $idlieu
     * @return Salle
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
