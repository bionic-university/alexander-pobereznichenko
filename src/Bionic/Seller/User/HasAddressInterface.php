<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 09.05.14
 * Time: 13:58
 */

namespace Bionic\Seller\User;
/**
 * Interface HasAddressInterface
 * @package Seller\interfaces
 */
interface HasAddressInterface
{
    public function getAddress();

    public function setAddress($city, $street, $house);
} 