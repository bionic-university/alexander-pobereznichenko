<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 14.05.14
 * Time: 20:49
 */

namespace Bionic\Exam;


class Point
{
    /**
     * @var integer
     */
    private $x;
    /**
     * @var integer
     */
    private $y;

    /**
     * @param int $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }
} 