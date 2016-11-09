<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptionforfait
 */
class Inscriptionforfait
{
    /**
     * @var \DateTime
     */
    private $dateinscriptionforfait;

    /**
     * @var string
     */
    private $etatinscriptionforfait;

    /**
     * @var integer
     */
    private $idinscriptionforfait;

    /**
     * @var \AD\PresaisonBundle\Entity\Typeforfait
     */
    private $idtypeforfait;

    /**
     * @var \AD\PresaisonBundle\Entity\Adherent
     */
    private $idadherent;


    /**
     * Set dateinscriptionforfait
     *
     * @param \DateTime $dateinscriptionforfait
     * @return Inscriptionforfait
     */
    public function setDateinscriptionforfait($dateinscriptionforfait)
    {
        $this->dateinscriptionforfait = $dateinscriptionforfait;

        return $this;
    }

    /**
     * Get dateinscriptionforfait
     *
     * @return \DateTime 
     */
    public function getDateinscriptionforfait()
    {
        return $this->dateinscriptionforfait;
    }

    /**
     * Set etatinscriptionforfait
     *
     * @param string $etatinscriptionforfait
     * @return Inscriptionforfait
     */
    public function setEtatinscriptionforfait($etatinscriptionforfait)
    {
        $this->etatinscriptionforfait = $etatinscriptionforfait;

        return $this;
    }

    /**
     * Get etatinscriptionforfait
     *
     * @return string 
     */
    public function getEtatinscriptionforfait()
    {
        return $this->etatinscriptionforfait;
    }

    /**
     * Get idinscriptionforfait
     *
     * @return integer 
     */
    public function getIdinscriptionforfait()
    {
        return $this->idinscriptionforfait;
    }

    /**
     * Set idtypeforfait
     *
     * @param \AD\PresaisonBundle\Entity\Typeforfait $idtypeforfait
     * @return Inscriptionforfait
     */
    public function setIdtypeforfait(\AD\PresaisonBundle\Entity\Typeforfait $idtypeforfait = null)
    {
        $this->idtypeforfait = $idtypeforfait;

        return $this;
    }

    /**
     * Get idtypeforfait
     *
     * @return \AD\PresaisonBundle\Entity\Typeforfait 
     */
    public function getIdtypeforfait()
    {
        return $this->idtypeforfait;
    }

    /**
     * Set idadherent
     *
     * @param \AD\PresaisonBundle\Entity\Adherent $idadherent
     * @return Inscriptionforfait
     */
    public function setIdadherent(\AD\PresaisonBundle\Entity\Adherent $idadherent = null)
    {
        $this->idadherent = $idadherent;

        return $this;
    }

    /**
     * Get idadherent
     *
     * @return \AD\PresaisonBundle\Entity\Adherent 
     */
    public function getIdadherent()
    {
        return $this->idadherent;
    }
}
