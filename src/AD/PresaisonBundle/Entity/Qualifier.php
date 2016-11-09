<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualifier
 */
class Qualifier
{
    /**
     * @var \AD\PresaisonBundle\Entity\Professeur
     */
    private $idprof;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Niveau
     */
    private $idniveau;


    /**
     * Set idprof
     *
     * @param \AD\PresaisonBundle\Entity\Professeur $idprof
     * @return Qualifier
     */
    public function setIdprof(\AD\PresaisonBundle\Entity\Professeur $idprof)
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

    /**
     * Set iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     * @return Qualifier
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
     * Set idniveau
     *
     * @param \AD\PresaisonBundle\Entity\Niveau $idniveau
     * @return Qualifier
     */
    public function setIdniveau(\AD\PresaisonBundle\Entity\Niveau $idniveau)
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
}
