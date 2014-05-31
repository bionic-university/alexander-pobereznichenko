<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cafedra
 */
class Cafedra
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $students;
    /**
     * @var \BionicUniversity\StudentBundle\Entity\Faculty
     */
    private $faculty;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Cafedra
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
     * @return Cafedra
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Add students
     *
     * @param \BionicUniversity\StudentBundle\Entity\Student $students
     * @return Cafedra
     */
    public function addStudent(\BionicUniversity\StudentBundle\Entity\Student $students)
    {
        $this->students[] = $students;

        return $this;
    }

    /**
     * Remove students
     *
     * @param \BionicUniversity\StudentBundle\Entity\Student $students
     */
    public function removeStudent(\BionicUniversity\StudentBundle\Entity\Student $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Get faculty
     *
     * @return \BionicUniversity\StudentBundle\Entity\Faculty
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Set faculty
     *
     * @param \BionicUniversity\StudentBundle\Entity\Faculty $faculty
     * @return Cafedra
     */
    public function setFaculty(\BionicUniversity\StudentBundle\Entity\Faculty $faculty = null)
    {
        $this->faculty = $faculty;

        return $this;
    }
}
