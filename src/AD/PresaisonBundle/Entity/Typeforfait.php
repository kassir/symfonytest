<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeforfait
 */
class Typeforfait
{
    /**
     * @var string
     */
    private $libelletypeforfait;

    /**
     * @var integer
     */
    private $tariftypeforfait;

    /**
     * @var integer
     */
    private $idtypeforfait;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $iddanse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddanse = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set libelletypeforfait
     *
     * @param string $libelletypeforfait
     * @return Typeforfait
     */
    public function setLibelletypeforfait($libelletypeforfait)
    {
        $this->libelletypeforfait = $libelletypeforfait;

        return $this;
    }

    /**
     * Get libelletypeforfait
     *
     * @return string 
     */
    public function getLibelletypeforfait()
    {
        return $this->libelletypeforfait;
    }

    /**
     * Set tariftypeforfait
     *
     * @param integer $tariftypeforfait
     * @return Typeforfait
     */
    public function setTariftypeforfait($tariftypeforfait)
    {
        $this->tariftypeforfait = $tariftypeforfait;

        return $this;
    }

    /**
     * Get tariftypeforfait
     *
     * @return integer 
     */
    public function getTariftypeforfait()
    {
        return $this->tariftypeforfait;
    }

    /**
     * Get idtypeforfait
     *
     * @return integer 
     */
    public function getIdtypeforfait()
    {
        return $this->idtypeforfait;
    }

    /**
     * Add iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     * @return Typeforfait
     */
    public function addIddanse(\AD\PresaisonBundle\Entity\Danse $iddanse)
    {
        $this->iddanse[] = $iddanse;

        return $this;
    }

    /**
     * Remove iddanse
     *
     * @param \AD\PresaisonBundle\Entity\Danse $iddanse
     */
    public function removeIddanse(\AD\PresaisonBundle\Entity\Danse $iddanse)
    {
        $this->iddanse->removeElement($iddanse);
    }

    /**
     * Get iddanse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIddanse()
    {
        return $this->iddanse;
    }
}
