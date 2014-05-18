<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 07.05.14
 * Time: 22:14
 */

namespace Bionic\Seller\Payment;

/**
 * Class Ruble
 * @package Bionic\Seller\Payment
 */
class Ruble extends AbstractCurrency
{
    /**
     * @var string
     */
    private $currencyName = 'Ruble';
    /**
     * @var array
     */
    private $availableNotes = array(5, 10, 100, 500, 1000, 5000);

    /**
     * @return array of integer values
     */
    function getAvailableNotes()
    {
        return $this->availableNotes;
    }

    /**
     * @return string
     */
    function getCurrencyName()
    {
        return $this->currencyName;
    }

} 