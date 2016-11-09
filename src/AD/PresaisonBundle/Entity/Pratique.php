<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pratique
 */
class Pratique
{
    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Soiree
     */
    private $idsoiree;

    /**
     * @var \AD\PresaisonBundle\Entity\Salle
     */
    private $idsalle;


    /**
     * Set iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     * @return Pratique
     */
    public function setIddanse(\AD\PresaisonBundle\Entity\Danse $iddanse)
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
     * Set idsoiree
     *
     * @param \AD\PresaisonBundle\Entity\Soiree $idsoiree
     * @return Pratique
     */
    public function setIdsoiree(\AD\PresaisonBundle\Entity\Soiree $idsoiree)
    {
        $this->idsoiree = $idsoiree;

        return $this;
    }

    /**
     * Get idsoiree
     *
     * @return \AD\PresaisonBundle\Entity\Soiree 
     */
    public function getIdsoiree()
    {
        return $this->idsoiree;
    }

    /**
     * Set idsalle
     *
     * @param \AD\PresaisonBundle\Entity\Salle $idsalle
     * @return Pratique
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
}
