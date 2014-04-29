<?php
/**
 * Created by PhpStorm.
 * User: sania
 * Date: 29.04.14
 * Time: 18:52
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'classes/AbstractBuilding.php';
include 'classes/TownHouse.php';

$a = new TownHouse();
$b = new TownHouse();
$c = new TownHouse();
$d = new TownHouse();
$e = new TownHouse();


echo $b->getCounter();