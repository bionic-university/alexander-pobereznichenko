<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 06.05.14
 * Time: 21:48
 */

namespace Bionic\Seller\Payment;

/**
 * Class UAH
 * @package Bionic\Seller\Payment
 */
class UAH extends AbstractCurrency
{
    /**
     * @var string
     */
    private $currencyName = 'UAH';

    /**
     * @var array
     */
    private $availableNotes = array(1, 2, 5, 10, 20, 50, 100, 200, 500,);

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
    public function getCurrencyName()
    {
        return $this->currencyName;
    }
} 