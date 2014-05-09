<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use homework_2\user\Seller;

//session_start();
spl_autoload_register('loader');

function loader($className)
{
    $nameSpace = explode('\\', $className);
    $path = join('/', array_slice($nameSpace, 1)) . '.php';
    if (file_exists($path)) {
        require_once($path);
    }
}

$seller = new Seller('Sasha', 'example@gmail.com');

$handle = fopen("php://stdin", 'r');

echo "\nВведите стоимость:";
$price = +(fgets($handle));

echo "Валюта(UAH | Ruble):";
$priceCurrency = trim(fgets($handle), "\n");

echo "\nВведите сумму внесенную покупателем:";
$receivedSum = +(fgets($handle));

echo "Валюта(UAH | Ruble):";
$receivedCurrency = trim(fgets($handle), "\n");

$seller->receivePayment($receivedSum, $price, $receivedCurrency, $priceCurrency);
$change = $seller->giveChange();

echo "\nСдача: \n";
foreach ($change as $note => $amount) {
    echo "{$note} {$priceCurrency} - {$amount}\n";
}