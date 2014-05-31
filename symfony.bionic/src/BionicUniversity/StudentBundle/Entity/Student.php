<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 */
class Student
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;
    /**
     * @var \BionicUniversity\StudentBundle\Entity\Cafedra
     */
    private $cafedra;

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
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Student
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Student
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get cafedra
     *
     * @return \BionicUniversity\StudentBundle\Entity\Cafedra
     */
    public function getCafedra()
    {
        return $this->cafedra;
    }

    /**
     * Set cafedra
     *
     * @param \BionicUniversity\StudentBundle\Entity\Cafedra $cafedra
     * @return Student
     */
    public function setCafedra(\BionicUniversity\StudentBundle\Entity\Cafedra $cafedra = null)
    {
        $this->cafedra = $cafedra;

        return $this;
    }
}
