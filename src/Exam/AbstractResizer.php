<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 14.05.14
 * Time: 20:39
 */

namespace Bionic\Exam;


abstract class AbstractResizer
{
    abstract public function thumbnail($width, $height);
    abstract public function getCenter();
} 