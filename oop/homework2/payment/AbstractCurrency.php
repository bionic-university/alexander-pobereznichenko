<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 06.05.14
 * Time: 21:06
 */

namespace homework_2\payment;

/**
 * Class AbstractCurrency
 * @package homework_2\payment
 */
abstract class AbstractCurrency
{
    /**
     * @var array
     */
    private $crossCourses = array(
        'UAH' => array(
            'Ruble' => 3,
            'USD' => 0.12,
        ),
        'Ruble' => array(
            'UAH' => 0.33,
            'USD' => 0.03,
        ),
    );

    /**
     * @return array of integer values
     */
    abstract function getAvailableNotes();

    /**
     * @return string
     */
    abstract function getCurrencyName();

    /**
     * @param string $currency
     * @return integer
     */
    public function getCrossCourse($currency)
    {
        return $this->crossCourses[$currency][$this->getCurrencyName()];
    }

    /**
     * @param integer $sum
     * @param string $currency
     * @return integer
     */
    public function convertIntoCurrentCurrency($sum, $currency)
    {
        if ($currency === $this->getCurrencyName()) {
            return $sum;
        }

        return $sum * $this->getCrossCourse($currency);
    }
} 