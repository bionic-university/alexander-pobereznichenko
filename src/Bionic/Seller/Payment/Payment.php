<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 06.05.14
 * Time: 14:17
 */

namespace Bionic\Seller\Payment;

/**
 * Class Payment
 * @package Bionic\Seller\Payment
 */
class Payment
{
    /**
     * @var float
     */
    private $sumReceived;

    /**
     * @var integer
     */
    private $price;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
        $className = "Bionic\\Seller\\Payment\\$currency";
        $this->currency = new $className;
    }

    /**
     * @return float
     */
    public function countChange()
    {
        return $this->getSumReceived() - $this->getPrice();
    }

    /**
     * @return array
     */
    public function composeChange()
    {
        $changeSum = $this->countChange();
        $change = array();
        $availableNotes = $this->getCurrency()->getAvailableNotes();
        rsort($availableNotes);
        foreach ($availableNotes as $note) {
            if ($changeSum >= $note) {
                $noteCount = floor($changeSum / $note);
                $changeSum -= ($note * $noteCount);
                if ($noteCount) {
                    $change[$note] = $noteCount;
                }
            }
        }
        $change['копеек'] = $changeSum * 100;

        return $change;
    }

    /**
     * @param $sumReceived
     * @param $price
     * @param $receivedCurrency
     * @param $priceCurrency
     */
    public function __construct($sumReceived, $price, $receivedCurrency, $priceCurrency)
    {
        $this->setCurrency($priceCurrency);
        $this->setSumReceived($sumReceived, $receivedCurrency);
        $this->setPrice($price);
    }
}