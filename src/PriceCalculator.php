<?php


namespace App;


use App\Interfaces\iPrice;

class PriceCalculator implements iPrice
{
    const MINIMAL_SUM = 0;

    protected $requirements = [];

    /**
     * @param iPrice $requirement
     * @return PriceCalculator
     */
    public function addRequirement(iPrice $requirement): PriceCalculator
    {
        $this->requirements[] = $requirement;

        return $this;
    }

    /**
     * расчет стоимости
     * @return int
     */
    public function calculate(): int
    {
        $sum = self::MINIMAL_SUM;

        foreach ( $this->requirements as $requirement ) {

            $sum += $requirement->getPrice();

        }

        return $sum;
    }

    /**
     * Цена аттрибута
     * @return int
     */
    public function getPrice(): int
    {
        return $this->calculate();
    }
}