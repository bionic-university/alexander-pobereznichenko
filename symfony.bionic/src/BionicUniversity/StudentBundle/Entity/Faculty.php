<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faculty
 */
class Faculty
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var University
     */
    private $university;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cafedras;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cafedras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return University
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * Set university
     *
     * @param \BionicUniversity\StudentBundle\Entity\University $university
     * @return Faculty
     */
    public function setUniversity(\BionicUniversity\StudentBundle\Entity\University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return Faculty
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return Faculty
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Add cafedras
     *
     * @param \BionicUniversity\StudentBundle\Entity\Cafedra $cafedras
     * @return Faculty
     */
    public function addCafedra(\BionicUniversity\StudentBundle\Entity\Cafedra $cafedras)
    {
        $this->cafedras[] = $cafedras;

        return $this;
    }

    /**
     * Remove cafedras
     *
     * @param \BionicUniversity\StudentBundle\Entity\Cafedra $cafedras
     */
    public function removeCafedra(\BionicUniversity\StudentBundle\Entity\Cafedra $cafedras)
    {
        $this->cafedras->removeElement($cafedras);
    }

    /**
     * Get cafedras
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCafedras()
    {
        return $this->cafedras;
    }
}
