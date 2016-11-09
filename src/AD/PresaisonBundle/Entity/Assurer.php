<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurer
 */
class Assurer
{
    /**
     * @var \AD\PresaisonBundle\Entity\Professeur
     */
    private $idprof;

    /**
     * @var \AD\PresaisonBundle\Entity\Stage
     */
    private $idstage;

    /**
     * @var \AD\PresaisonBundle\Entity\Professeur
     */
    private $idprof1;


    /**
     * Set idprof
     *
     * @param \AD\PresaisonBundle\Entity\Professeur $idprof
     * @return Assurer
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
     * Set idstage
     *
     * @param \AD\PresaisonBundle\Entity\Stage $idstage
     * @return Assurer
     */
    public function setIdstage(\AD\PresaisonBundle\Entity\Stage $idstage)
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
     * Set idprof1
     *
     * @param \AD\PresaisonBundle\Entity\Professeur $idprof1
     * @return Assurer
     */
    public function setIdprof1(\AD\PresaisonBundle\Entity\Professeur $idprof1)
    {
        $this->idprof1 = $idprof1;

        return $this;
    }

    /**
     * Get idprof1
     *
     * @return \AD\PresaisonBundle\Entity\Professeur 
     */
    public function getIdprof1()
    {
        return $this->idprof1;
    }
}
