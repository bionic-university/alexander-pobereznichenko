<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 28.04.14
 * Time: 20:36
 */
abstract class AbstractCircle
{
    private $radius;
    private $length;

    abstract public function rotate();

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function __construct($radius)
    {
        $this->radius = $radius;
    }
}