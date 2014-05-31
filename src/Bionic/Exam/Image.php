<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 14.05.14
 * Time: 20:46
 */

namespace Bionic\Exam;

class Image implements ImageInterface
{
    /**
     * @var integer
     */
    private $height;
    /**
     * @var integer
     */
    private $width;

    /**
     * @var AbstractResizer
     */
    private $resizer;

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        //@todo
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
        //@todo
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \Bionic\Exam\AbstractResizer $resizer
     */
    public function setResizer($resizer)
    {
        $this->resizer = $resizer;
    }

    /**
     * @return \Bionic\Exam\AbstractResizer
     */
    public function getResizer()
    {
        return $this->resizer;
    }

    public function resize($width, $height)
    {
        $this->getResizer()->thumbnail($width, $height);
    }

    public function __construct()
    {
        $this->setResizer(new Resizer($this));
    }

}
