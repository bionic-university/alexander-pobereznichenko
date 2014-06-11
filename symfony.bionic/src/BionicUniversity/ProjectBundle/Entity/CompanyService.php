<?php

namespace BionicUniversity\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyService
 */
class CompanyService
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var integer
     */
    private $warranty;

    /**
     * @var boolean
     */
    private $maintenance;

    /**
     * @var string
     */
    private $additionally;
    /**
     * @var Company
     */
    private $company;

    /**
     * @var Service
     */
    private $service;

    /**
     * @return Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param Service $service
     * @return $this
     */
    public function setService(Service $service)
    {
        $this->service = $service;

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
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return CompanyService
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get warranty
     *
     * @return integer
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Set warranty
     *
     * @param integer $warranty
     * @return CompanyService
     */
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;

        return $this;
    }

    /**
     * Get maintenance
     *
     * @return boolean
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * Set maintenance
     *
     * @param boolean $maintenance
     * @return CompanyService
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    /**
     * Get additionally
     *
     * @return string
     */
    public function getAdditionally()
    {
        return $this->additionally;
    }

    /**
     * Set additionally
     *
     * @param string $additionally
     * @return CompanyService
     */
    public function setAdditionally($additionally)
    {
        $this->additionally = $additionally;

        return $this;
    }

    /**
     * Get company
     *
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set company
     *
     * @param Company $company
     * @return CompanyService
     */
    public function setCompany(Company $company = null)
    {
        $this->company = $company;

        return $this;
    }
}
