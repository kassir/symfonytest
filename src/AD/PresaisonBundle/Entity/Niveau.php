<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 */
class Niveau
{
    /**
     * @var string
     */
    private $libelleniveau;

    /**
     * @var string
     */
    private $descniveau;

    /**
     * @var integer
     */
    private $idniveau;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idstage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idstage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set libelleniveau
     *
     * @param string $libelleniveau
     * @return Niveau
     */
    public function setLibelleniveau($libelleniveau)
    {
        $this->libelleniveau = $libelleniveau;

        return $this;
    }

    /**
     * Get libelleniveau
     *
     * @return string 
     */
    public function getLibelleniveau()
    {
        return $this->libelleniveau;
    }

    /**
     * Set descniveau
     *
     * @param string $descniveau
     * @return Niveau
     */
    public function setDescniveau($descniveau)
    {
        $this->descniveau = $descniveau;

        return $this;
    }

    /**
     * Get descniveau
     *
     * @return string 
     */
    public function getDescniveau()
    {
        return $this->descniveau;
    }

    /**
     * Get idniveau
     *
     * @return integer 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Add idstage
     *
     * @param \AD\PresaisonBundle\Entity\Stage $idstage
     * @return Niveau
     */
    public function addIdstage(\AD\PresaisonBundle\Entity\Stage $idstage)
    {
        $this->idstage[] = $idstage;

        return $this;
    }

    /**
     * Remove idstage
     *
     * @param \AD\PresaisonBundle\Entity\Stage $idstage
     */
    public function removeIdstage(\AD\PresaisonBundle\Entity\Stage $idstage)
    {
        $this->idstage->removeElement($idstage);
    }

    /**
     * Get idstage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdstage()
    {
        return $this->idstage;
    }
}
