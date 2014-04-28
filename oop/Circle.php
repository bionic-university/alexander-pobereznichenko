<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 28.04.14
 * Time: 18:37
 */
class Circle
{
    public $material;

    /**
     * @var float $radius
     */
    public $radius;

    /**
     * @var string $color
     */
    public $color;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function  __constructor($material, $radius, $color)
    {
        $this->$material = $material;
        $this->$radius = $material;
        $this->$color = $material;
    }
}