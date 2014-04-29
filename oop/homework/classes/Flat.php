<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 29.04.14
 * Time: 8:47
 */
class Flat extends Building
{
    private $floor;

    function __construct($sellPriceFactor, $rentPriceFactor, $rooms, $area)
    {
        parent::__construct($sellPriceFactor, $rentPriceFactor, $rooms, $area);
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }


    public function approximateSellPrice()
    {
        // TODO: Implement approximateSellPrice() method.
    }

    public function approximateRentPrice()
    {
        // TODO: Implement approximateRentPrice() method.
    }

} 