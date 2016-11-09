<?php

namespace AD\PresaisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 */
class Lieu
{
    /**
     * @var string
     */
    private $nomlieu;

    /**
     * @var string
     */
    private $adresselieu;

    /**
     * @var integer
     */
    private $idlieu;


    /**
     * Set nomlieu
     *
     * @param string $nomlieu
     * @return Lieu
     */
    public function setNomlieu($nomlieu)
    {
        $this->nomlieu = $nomlieu;

        return $this;
    }

    /**
     * Get nomlieu
     *
     * @return string 
     */
    public function getNomlieu()
    {
        return $this->nomlieu;
    }

    /**
     * Set adresselieu
     *
     * @param string $adresselieu
     * @return Lieu
     */
    public function setAdresselieu($adresselieu)
    {
        $this->adresselieu = $adresselieu;

        return $this;
    }

    /**
     * Get adresselieu
     *
     * @return string 
     */
    public function getAdresselieu()
    {
        return $this->adresselieu;
    }

    /**
     * Get idlieu
     *
     * @return integer 
     */
    public function getIdlieu()
    {
        return $this->idlieu;
    }
}
