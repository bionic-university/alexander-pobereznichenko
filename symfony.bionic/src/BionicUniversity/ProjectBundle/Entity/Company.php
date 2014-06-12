<?php

namespace BionicUniversity\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 */
class Company
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $foundationYear;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $nds;

    /**
     * @var string
     */
    private $site;

    /**
     * @var Collection
     */
    private $services;
    /**
     * @var User
     */
    private $owner;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new ArrayCollection();
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get foundationYear
     *
     * @return \DateTime
     */
    public function getFoundationYear()
    {
        return $this->foundationYear;
    }

    /**
     * Set foundationYear
     *
     * @param \DateTime $foundationYear
     * @return Company
     */
    public function setFoundationYear($foundationYear)
    {
        $this->foundationYear = $foundationYear;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Company
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get nds
     *
     * @return boolean
     */
    public function getNds()
    {
        return $this->nds;
    }

    /**
     * Set nds
     *
     * @param boolean $nds
     * @return Company
     */
    public function setNds($nds)
    {
        $this->nds = $nds;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Company
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Add services
     *
     * @param CompanyService $service
     * @return Company
     */
    public function addService(CompanyService $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove services
     *
     * @param CompanyService $service
     */
    public function removeService(CompanyService $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Get owner
     *
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set owner
     *
     * @param User $owner
     * @return Company
     */
    public function setOwner(User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }
}
