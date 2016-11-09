<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveaudanse
 */
class Niveaudanse
{
    /**
     * @var \AD\PresaisonBundle\Entity\Inscriptionforfait
     */
    private $idinscriptionforfait;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse;

    /**
     * @var \AD\PresaisonBundle\Entity\Danse
     */
    private $iddanse1;

    /**
     * @var \AD\PresaisonBundle\Entity\Niveau
     */
    private $idniveau;

    /**
     * @var \AD\PresaisonBundle\Entity\Niveau
     */
    private $idniveau1;


    /**
     * Set idinscriptionforfait
     *
     * @param \AD\PresaisonBundle\Entity\Inscriptionforfait $idinscriptionforfait
     * @return Niveaudanse
     */
    public function setIdinscriptionforfait(\AD\PresaisonBundle\Entity\Inscriptionforfait $idinscriptionforfait)
    {
        $this->idinscriptionforfait = $idinscriptionforfait;

        return $this;
    }

    /**
     * Get idinscriptionforfait
     *
     * @return \AD\PresaisonBundle\Entity\Inscriptionforfait 
     */
    public function getIdinscriptionforfait()
    {
        return $this->idinscriptionforfait;
    }

    /**
     * Set iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     * @return Niveaudanse
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
     * Set iddanse1
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse1
     * @return Niveaudanse
     */
    public function setIddanse1(\AD\PresaisonBundle\Entity\Danse $iddanse1)
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
     * @return Niveaudanse
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
     * Set idniveau1
     *
     * @param \AD\PresaisonBundle\Entity\Niveau $idniveau1
     * @return Niveaudanse
     */
    public function setIdniveau1(\AD\PresaisonBundle\Entity\Niveau $idniveau1 = null)
    {
        $this->idniveau1 = $idniveau1;

        return $this;
    }

    /**
     * Get idniveau1
     *
     * @return \AD\PresaisonBundle\Entity\Niveau 
     */
    public function getIdniveau1()
    {
        return $this->idniveau1;
    }
}
