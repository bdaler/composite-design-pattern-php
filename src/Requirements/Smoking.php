<?php


namespace App\Requirements;


use App\Interfaces\iPrice;

class Smoking implements iPrice
{

    const DEFAULT_PRICE = 20;

    /**
     * Цена аттрибута
     * @return int
     */
    public function getPrice(): int
    {
        return self::DEFAULT_PRICE;
    }
}