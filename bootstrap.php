<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 5/18/14
 * Time: 9:05 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "vendor/autoload.php";

spl_autoload_register('autoload');

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = 'src/';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}