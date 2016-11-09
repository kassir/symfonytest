<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglementinscritpion
 */
class Reglementinscritpion
{
    /**
     * @var \DateTime
     */
    private $datereglement;

    /**
     * @var integer
     */
    private $idreglementinscritpion;

    /**
     * @var \AD\PresaisonBundle\Entity\Typereglement
     */
    private $idtypereglement;

    /**
     * @var \AD\PresaisonBundle\Entity\Inscriptionforfait
     */
    private $idinscriptionforfait;


    /**
     * Set datereglement
     *
     * @param \DateTime $datereglement
     * @return Reglementinscritpion
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
     * Get idreglementinscritpion
     *
     * @return integer 
     */
    public function getIdreglementinscritpion()
    {
        return $this->idreglementinscritpion;
    }

    /**
     * Set idtypereglement
     *
     * @param \AD\PresaisonBundle\Entity\Typereglement $idtypereglement
     * @return Reglementinscritpion
     */
    public function setIdtypereglement(\AD\PresaisonBundle\Entity\Typereglement $idtypereglement = null)
    {
        $this->idtypereglement = $idtypereglement;

        return $this;
    }

    /**
     * Get idtypereglement
     *
     * @return \AD\PresaisonBundle\Entity\Typereglement 
     */
    public function getIdtypereglement()
    {
        return $this->idtypereglement;
    }

    /**
     * Set idinscriptionforfait
     *
     * @param \AD\PresaisonBundle\Entity\Inscriptionforfait $idinscriptionforfait
     * @return Reglementinscritpion
     */
    public function setIdinscriptionforfait(\AD\PresaisonBundle\Entity\Inscriptionforfait $idinscriptionforfait = null)
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
}
