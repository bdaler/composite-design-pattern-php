<?php
require 'vendor/autoload.php';

use App\PriceCalculator;
use App\Requirements\ChildChair;
use App\Requirements\MiniBus;
use App\Requirements\Smoking;


$price = new PriceCalculator();

$price
    ->addRequirement(new MiniBus)
    ->addRequirement(new Smoking)
    ->addRequirement(new ChildChair)
    ;

echo $price->calculate();