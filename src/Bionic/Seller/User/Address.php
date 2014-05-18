<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 09.05.14
 * Time: 12:11
 */

namespace Bionic\Seller\User;

/**
 * Class Address
 * @package Seller\user
 */
class Address
{
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $street;
    /**
     * @var string
     */
    private $house;

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
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string $house
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

    public function __construct($city, $street, $house)
    {
        $this->setCity($city);
        $this->setStreet($street);
        $this->setHouse($house);
    }

} 