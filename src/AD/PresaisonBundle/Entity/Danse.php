<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Danse
 */
class Danse
{
    /**
     * @var string
     */
    private $nomdanse;

    /**
     * @var integer
     */
    private $iddanse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idtypeforfait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idtypeforfait = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nomdanse
     *
     * @param string $nomdanse
     * @return Danse
     */
    public function setNomdanse($nomdanse)
    {
        $this->nomdanse = $nomdanse;

        return $this;
    }

    /**
     * Get nomdanse
     *
     * @return string 
     */
    public function getNomdanse()
    {
        return $this->nomdanse;
    }

    /**
     * Get iddanse
     *
     * @return integer 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }

    /**
     * Add idtypeforfait
     *
     * @param \AD\PresaisonBundle\Entity\Typeforfait $idtypeforfait
     * @return Danse
     */
    public function addIdtypeforfait(\AD\PresaisonBundle\Entity\Typeforfait $idtypeforfait)
    {
        $this->idtypeforfait[] = $idtypeforfait;

        return $this;
    }

    /**
     * Remove idtypeforfait
     *
     * @param \AD\PresaisonBundle\Entity\Typeforfait $idtypeforfait
     */
    public function removeIdtypeforfait(\AD\PresaisonBundle\Entity\Typeforfait $idtypeforfait)
    {
        $this->idtypeforfait->removeElement($idtypeforfait);
    }

    /**
     * Get idtypeforfait
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdtypeforfait()
    {
        return $this->idtypeforfait;
    }
}
