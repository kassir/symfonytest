<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typereglement
 */
class Typereglement
{
    /**
     * @var string
     */
    private $typereglement;

    /**
     * @var integer
     */
    private $idtypereglement;


    /**
     * Set typereglement
     *
     * @param string $typereglement
     * @return Typereglement
     */
    public function setTypereglement($typereglement)
    {
        $this->typereglement = $typereglement;

        return $this;
    }

    /**
     * Get typereglement
     *
     * @return string 
     */
    public function getTypereglement()
    {
        return $this->typereglement;
    }

    /**
     * Get idtypereglement
     *
     * @return integer 
     */
    public function getIdtypereglement()
    {
        return $this->idtypereglement;
    }
}
