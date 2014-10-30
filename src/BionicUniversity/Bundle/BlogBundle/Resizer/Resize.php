<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 30.10.14
 * Time: 19:43
 */

namespace BionicUniversity\Bundle\BlogBundle\Resizer;


class Resize implements ResizerInterface{

    private $imageService;

    /** @var  integer */
    private $height;

    /** @var  integer */
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function resize()
    {
        // TODO: Implement resize() method.
    }


} 