<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 09.05.14
 * Time: 14:02
 */

namespace homework2\interfaces;

/**
 * Interface ReceivePaymentInterface
 * @package homework2\interfaces
 */
interface ReceivePaymentInterface
{
    public function receivePayment($sumReceived, $price, $receivedCurrency, $priceCurrency);
} 