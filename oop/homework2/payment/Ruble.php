<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 07.05.14
 * Time: 22:14
 */

namespace homework_2\payment;

class Ruble extends AbstractCurrency
{
    private $currencyName = 'Ruble';
    /**
     * @return array of integer values
     */
    function getAvailableNotes()
    {
        // TODO: Implement getAvailableNotes() method.
    }

    /**
     * @return string
     */
    function getCurrencyName()
    {
        return $this->currencyName;
    }

} 