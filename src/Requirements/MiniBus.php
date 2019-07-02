<?php


namespace App\Requirements;


use App\Interfaces\iPrice;

class MiniBus implements iPrice
{
    const DEFAULT_PRICE = 30;

    /**
     * Цена аттрибута
     * @return int
     */
    public function getPrice(): int
    {
        return self::DEFAULT_PRICE;
    }
}