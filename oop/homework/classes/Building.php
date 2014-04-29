<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 29.04.14
 * Time: 8:29
 */
abstract class Building
{
    public function __construct($sellPriceFactor, $rentPriceFactor, $rooms, $area)
    {
        $this->setSellPriceFactor($sellPriceFactor);
        $this->setRentPriceFactor($rentPriceFactor);
        $this->setRooms($rooms);
        $this->setArea($area);
        $this->setRentPrice();
        $this->setSellPrice();
    }

    public $sellPrice;

    public $rentPrice;
    /**
     * @var float $priceFactor
     */
    private $sellPriceFactor;
    /**
     * @var float $rentPriceFactor
     */
    private $rentPriceFactor;
    /**
     * @var integer $rooms
     */
    private $rooms;
    /**
     * @var integer $area
     */
    private $area;
    /** @var  Address $address */
    private $address;

    /**
     * @return mixed
     */
    public function getRentPrice()
    {
        return $this->rentPrice;
    }

    public function setRentPrice()
    {
        $this->rentPrice = $this->approximateRentPrice();
    }

    /**
     * @return mixed
     */
    public function getSellPrice()
    {
        return $this->sellPrice;
    }

    public function setSellPrice()
    {
        $this->sellPrice = $this->approximateSellPrice();
    }

    /**
     * @return float
     */
    public function getRentPriceFactor()
    {
        return $this->rentPriceFactor;
    }

    /**
     * @param float $rentPriceFactor
     */
    public function setRentPriceFactor($rentPriceFactor)
    {
        $this->rentPriceFactor = $rentPriceFactor;
    }

    /**
     * @return float
     */
    public function getSellPriceFactor()
    {
        return $this->sellPriceFactor;
    }

    /**
     * @param float $sellPriceFactor
     */
    public function setSellPriceFactor($sellPriceFactor)
    {
        $this->sellPriceFactor = $sellPriceFactor;
    }


    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param mixed $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($city, $distinct, $street, $house)
    {
        $this->address = new Address($city, $distinct, $street, $house);
    }


    abstract public function approximateSellPrice();

    abstract public function approximateRentPrice();
} 