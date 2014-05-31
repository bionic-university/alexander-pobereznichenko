<?php

/**
 * Created by PhpStorm.
 * User: sania
 * Date: 5/18/14
 * Time: 2:05 PM
 */
namespace Bionic\Tests\Seller\Payment;

use Bionic\Seller\Payment\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    public function testCountChange()
    {
        $payment = new Payment(500, 800, 'UAH', 'UAH');
        $this->assertNotNull($payment->countChange());
    }
}