<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 30.10.14
 * Time: 21:03
 */

namespace BionicUniversity\Bundle\BlogBundle\TextModifier;


class Camelizer implements CamelizerInterface{
    public function camelize($string)
    {
        $words = preg_split(' ', $string);
        $result = '';
        foreach($words as $word){
            $result .= $this->handleWord($word);
        }
        return lcfirst($result);
    }

    /**
     * @param $word
     * @return string
     */
    private function handleWord($word){
        return ucfirst(trim($word));
    }

} 