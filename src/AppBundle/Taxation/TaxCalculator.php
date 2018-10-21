<?php

declare(strict_types=1);

namespace AppBundle\Taxation;

final class TaxCalculator
{
    private function __construct()
    {
    }

    /**
     * @param float $amount
     * @param int $rate
     *
     * @return float
     *
     * @throws \InvalidArgumentException
     */
    public static function calculate(float $amount, int $rate): float
    {
        if (!in_array($rate, TaxRates::getAll())) {
            throw new \InvalidArgumentException('Invalid rate.');
        }

        return $amount * (1 + ($rate / 100));
    }
}
