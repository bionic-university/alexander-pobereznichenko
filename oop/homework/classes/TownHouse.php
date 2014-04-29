<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 29.04.14
 * Time: 8:47
 */
class TownHouse extends AbstractBuilding
{
    static $counter = 0;

    public function approximateSellPrice()
    {
        // TODO: Implement approximateSellPrice() method.
    }

    public function approximateRentPrice()
    {
        // TODO: Implement approximateRentPrice() method.
    }

    /**
     * @return int
     */
    public static function getCounter()
    {
        return self::$counter;
    }

    /**
     * @param int $counter
     */
    public static function setCounter($counter)
    {
        self::$counter = $counter;
    }


    public function __construct()
    {
        self::$counter += 1;
    }

} 