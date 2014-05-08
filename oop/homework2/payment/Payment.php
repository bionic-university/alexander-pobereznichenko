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
    private $currency;

    /**
     * @return float
     */
    public function getSumReceived()
    {
        return $this->sumReceived;
    }

    /**
     * @param $sumReceived
     * @param string $currency
     */
    public function setSumReceived($sumReceived, $currency)
    {
        if ($this->currency->getCurrencyName() !== $currency) {
            $sumReceived = $this->currency->convertIntoCurrentCurrency($sumReceived, $currency);
        }
        $this->sumReceived = $sumReceived;
    }

    /**
     * @return string
     */
    public function  getCurrencyName()
    {
        return $this->currency->getCurrencyName();
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
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return AbstractCurrency
     */
    public function setCurrency($currency)
    {
        $className = "homework_2\\payment\\$currency";
        $this->currency = new $className;
    }

    public function countChange()
    {
        return $this->getSumReceived() - $this->getTotalPrice();
    }

    public function __construct($sumReceived, $totalPrice, $receivedCurrency, $priceCurrency)
    {
        $this->setCurrency($priceCurrency);
        $this->setSumReceived($sumReceived, $receivedCurrency);
        $this->setTotalPrice($totalPrice);
    }
}