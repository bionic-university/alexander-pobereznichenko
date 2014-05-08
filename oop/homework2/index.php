<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use homework_2\payment\Payment;

spl_autoload_register('loader');

function loader($className)
{
    $nameSpace = explode('\\', $className);
    $path = join('/', array_slice($nameSpace, 1)) . '.php';
    if (file_exists($path)) {
        require_once($path);
    }
}

$payment = new Payment('UAH');
echo $payment->getCurrencyName();