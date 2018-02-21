<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "vendor/autoload.php";

use Twitter\Search\Search;

$apiKey = "Azq6HCa1nVVUnhiQaNMFQRc3i";
$secretKey = "I8oUNgShp3DH5ZXDeIH2utPvkmE1i6Aho9V4aDfIq18rVC1vs7";


$search = new Search();

$search->setToken($apiKey, $secretKey);
$value = ["q" => "Federico Castelli"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";