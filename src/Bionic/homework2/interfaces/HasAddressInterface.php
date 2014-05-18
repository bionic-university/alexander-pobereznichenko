<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 09.05.14
 * Time: 13:58
 */

namespace homework2\interfaces;

/**
 * Interface HasAddressInterface
 * @package homework2\interfaces
 */
interface HasAddressInterface
{
    public function getAddress();
    public function setAddress($city, $street, $house);
} 