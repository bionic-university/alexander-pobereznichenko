<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 09.05.14
 * Time: 14:02
 */

namespace Bionic\Seller\Payment;

/**
 * Interface ReceivePaymentInterface
 * @package Bionic\Seller\Payment
 */
interface ReceivePaymentInterface
{
    public function receivePayment($sumReceived, $price, $receivedCurrency, $priceCurrency);
} 