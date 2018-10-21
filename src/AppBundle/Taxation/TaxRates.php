<?php

declare(strict_types=1);

namespace AppBundle\Taxation;

final class TaxRates
{
    const TAX_RATE_PERCENT_ONE = 17;
    const TAX_RATE_PERCENT_TWO = 20;

    private function __construct()
    {
    }

    /**
     * @return array
     *
     * @throws \ReflectionException
     */
    public static function getAll(): array
    {
        $reflexionClass = new \ReflectionClass(get_called_class());

        return $reflexionClass->getConstants();
    }
}
