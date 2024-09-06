<?php

include __DIR__ . '/vendor/autoload.php';

use Torian257x\RubWrap\Service\RubixService;

// Suppress the deprecation notice temporarily
error_reporting(error_reporting() & ~E_DEPRECATED);

$apartment_data = [
    ['space_m2' =>  10, 'price' => 100],
    ['space_m2' =>  20, 'price' => 200],
    ['space_m2' =>  30, 'price' => 300],
    ['space_m2' =>  40, 'price' => 400],
    //...
    ['space_m2' => 280, 'price' => 2800],
    ['space_m2' => 290, 'price' => 2900],
    ['space_m2' => 300, 'price' => 3000],
];

$report = RubixService::train($apartment_data, 'price');

var_export($report);