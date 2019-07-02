<?php


namespace App\Interfaces;


interface iPrice
{
    /**
     * Цена аттрибута
     * @return int
     */
    public function getPrice(): int;
}