<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use homework_2\payment\Payment\Payment;
use homework_2\payment\UAH\UAH;

spl_autoload_register('loader');

function loader($className)
{
    $nameSpace = explode('\\', $className);
    $length = count($nameSpace);
    $path = join('/', array_slice($nameSpace, 1, $length - 2)) . '.php';
    if (file_exists($path)) {
        require_once($path);
    }
}

var_dump(new Payment());
var_dump(new UAH());