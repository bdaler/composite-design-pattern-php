<?php


namespace App\Requirements;


use App\Interfaces\iPrice;

class ChildChair implements iPrice
{

    const DEFAULT_PRICE = 10;

    /**
     * Цена аттрибута
     * @return int
     */
    public function getPrice(): int
    {
        return self::DEFAULT_PRICE;
    }
}