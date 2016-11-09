<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reduction
 */
class Reduction
{
    /**
     * @var string
     */
    private $typereduction;

    /**
     * @var integer
     */
    private $montantreduction;

    /**
     * @var integer
     */
    private $idreduction;


    /**
     * Set typereduction
     *
     * @param string $typereduction
     * @return Reduction
     */
    public function setTypereduction($typereduction)
    {
        $this->typereduction = $typereduction;

        return $this;
    }

    /**
     * Get typereduction
     *
     * @return string 
     */
    public function getTypereduction()
    {
        return $this->typereduction;
    }

    /**
     * Set montantreduction
     *
     * @param integer $montantreduction
     * @return Reduction
     */
    public function setMontantreduction($montantreduction)
    {
        $this->montantreduction = $montantreduction;

        return $this;
    }

    /**
     * Get montantreduction
     *
     * @return integer 
     */
    public function getMontantreduction()
    {
        return $this->montantreduction;
    }

    /**
     * Get idreduction
     *
     * @return integer 
     */
    public function getIdreduction()
    {
        return $this->idreduction;
    }
}
