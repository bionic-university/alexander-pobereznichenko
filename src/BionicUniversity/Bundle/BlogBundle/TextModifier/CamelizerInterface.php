<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 30.10.14
 * Time: 21:02
 */

namespace BionicUniversity\Bundle\BlogBundle\TextModifier;


interface CamelizerInterface {
    /**
     * @param string $string
     * @return string
     */
    public function camelize($string);
} 