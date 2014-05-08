<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 06.05.14
 * Time: 14:17
 */

namespace homework_2\payment;


class Payment
{
    /**
     * @var float
     */
    private $sumReceived;

    /**
     * @var integer
     */
    private $totalPrice;

    /**
     * @var AbstractCurrency
     */
    private $currentCurrency;


    /**
     * @return float
     */
    public function getSumReceived()
    {
        return $this->sumReceived;
    }

    /**
     * @param float $sumReceived
     */
    public function setSumReceived($sumReceived)
    {
        $this->sumReceived = $sumReceived;
    }

    /**
     * @return string
     */
    public function  getCurrencyName()
    {
        return $this->currentCurrency->getCurrencyName();
    }

    /**
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return AbstractCurrency
     */
    public function getCurrentCurrency()
    {
        return $this->currentCurrency;
    }

    /**
     * @param string $currency
     */
    public function setCurrentCurrency($currency)
    {
        $className = "\\homework_2\\payment\\$currency";
        $this->currentCurrency = new $className;
    }

    /**
     * @param string $neededCurrency
     */
    public function changePaymentCurrency($neededCurrency)
    {
        if($neededCurrency){
            $this->setSumReceived($this->currentCurrency->convertCurrency($this->sumReceived, $neededCurrency));
            $this->setTotalPrice($this->currentCurrency->convertCurrency($this->totalPrice, $neededCurrency));
            $this->setCurrentCurrency($neededCurrency);
        }
    }

    public function __construct($currency)
    {
        $this->setCurrentCurrency($currency);
    }
}