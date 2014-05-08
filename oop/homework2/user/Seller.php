<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 08.05.14
 * Time: 10:11
 */

namespace homework_2\user;


use homework_2\payment\Payment;

class Seller extends AbstractUser
{
    /**
     * @var Payment;
     */
    private $receivedPayment;

    /**
     * @return Payment
     */
    public function getReceivedPayment()
    {
        return $this->receivedPayment;
    }

    /**
     * @param Payment $receivedPayment
     */
    public function setReceivedPayment($receivedPayment)
    {
        $this->receivedPayment = $receivedPayment;
    }

    public function receivePayment($sumReceived, $totalPrice, $receivedCurrency, $priceCurrency)
    {
        $this->setReceivedPayment(new Payment($sumReceived, $totalPrice, $receivedCurrency, $priceCurrency));
    }

    public function giveChange()
    {
        $change = $this->getReceivedPayment()->countChange();
        return $change;
    }
}