<?php

namespace BionicUniversity\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 */
class Service
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
     * @var Category
     */
    private $category;
    /**
     * @var Collection
     */
    private $companies;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companies = new ArrayCollection();
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
     * @return Service
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param Category $category
     * @return Service
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Add companies
     *
     * @param CompanyService $company
     * @return Service
     */
    public function addCompany(CompanyService $company)
    {
        $this->companies[] = $company;

        return $this;
    }

    /**
     * Remove companies
     *
     * @param CompanyService $company
     */
    public function removeCompany(CompanyService $company)
    {
        $this->companies->removeElement($company);
    }

    /**
     * Get companies
     *
     * @return Collection
     */
    public function getCompanies()
    {
        return $this->companies;
    }
}
