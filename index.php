<?php
require 'vendor/autoload.php';

use App\PriceCalculator;
use App\Requirements\ChildChair;
use App\Requirements\MiniBus;
use App\Requirements\Smoking;

$price2 = new PriceCalculator();
echo $price2->calculate();

$price = new PriceCalculator();

$price
    ->addRequirement(new MiniBus)
    ->addRequirement(new Smoking)
    ->addRequirement(new ChildChair)
    ->addRequirement($price2)
    ;

echo $price->calculate();