<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 14.05.14
 * Time: 20:45
 */

namespace Bionic\Exam;


class Resizer extends AbstractResizer
{
    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var Point
     */
    private $center;

    /**
     * @param \Bionic\Exam\Point $center
     */
    public function setCenter($center)
    {
        $this->center = $center;
    }

    /**
     * @return \Bionic\Exam\Point
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $length
     * @return integer
     */
    public function getMiddle($length)
    {
        return floor($length/2);
    }

    /**
     * @param ImageInterface $image
     */
    function __construct(ImageInterface $image)
    {
        $this->setWidth($image->getWidth());
        $this->setHeight($image->getHeight());
        $this->setCenter($this->getMiddle($this->getWidth()), $this->getMiddle($this->getHeight()));
    }

    public function thumbnail($width, $height)
    {
        // TODO: Implement thumbnail() method.
    }
} 