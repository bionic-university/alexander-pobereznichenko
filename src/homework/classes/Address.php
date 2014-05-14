<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 29.04.14
 * Time: 8:43
 */
class Address
{
    /**
     * @var string $city
     */
    private $city;
    /**
     * @var string $city
     */
    private $distinct;
    /**
     * @var string $city
     */
    private $street;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getDistinct()
    {
        return $this->distinct;
    }

    /**
     * @param string $distinct
     */
    public function setDistinct($distinct)
    {
        $this->distinct = $distinct;
    }

    /**
     * @return int
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param int $house
     */
    public function setHouse($house)
    {
        $this->house = $house;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @var integer $house
     */
    private $house;

    public function getAddress()
    {
        return "{$this->city} {$this->street} street {$this->house}({$this->distinct})";
    }

    public function __construct($city, $distinct, $street, $house)
    {
        $this->setCity($city);
        $this->setDistinct($distinct);
        $this->setStreet($street);
        $this->setHouse($house);
    }
}