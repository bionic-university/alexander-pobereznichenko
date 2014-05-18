<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . "/../bootstrap.php";

use Bionic\Seller\User\Seller;

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