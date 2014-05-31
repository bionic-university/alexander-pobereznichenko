<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * University
 */
class University
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
     * @var integer
     */
    private $accreditationLevel;

    /**
     * @var integer
     */
    private $yearOfFoundation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    function __toString()
    {
        return $this->shortName;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return University
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
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
     * Set shortName
     *
     * @param string $shortName
     * @return University
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

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
     * Set accreditationLevel
     *
     * @param integer $accreditationLevel
     * @return University
     */
    public function setAccreditationLevel($accreditationLevel)
    {
        $this->accreditationLevel = $accreditationLevel;

        return $this;
    }

    /**
     * Get accreditationLevel
     *
     * @return integer 
     */
    public function getAccreditationLevel()
    {
        return $this->accreditationLevel;
    }

    /**
     * Set yearOfFoundation
     *
     * @param integer $yearOfFoundation
     * @return University
     */
    public function setYearOfFoundation($yearOfFoundation)
    {
        $this->yearOfFoundation = $yearOfFoundation;

        return $this;
    }

    /**
     * Get yearOfFoundation
     *
     * @return integer 
     */
    public function getYearOfFoundation()
    {
        return $this->yearOfFoundation;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $faculties;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->faculties = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add faculties
     *
     * @param \BionicUniversity\StudentBundle\Entity\Faculty $faculties
     * @return University
     */
    public function addFaculty(\BionicUniversity\StudentBundle\Entity\Faculty $faculties)
    {
        $this->faculties[] = $faculties;

        return $this;
    }

    /**
     * Remove faculties
     *
     * @param \BionicUniversity\StudentBundle\Entity\Faculty $faculties
     */
    public function removeFaculty(\BionicUniversity\StudentBundle\Entity\Faculty $faculties)
    {
        $this->faculties->removeElement($faculties);
    }

    /**
     * Get faculties
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFaculties()
    {
        return $this->faculties;
    }
}
