<?php

declare(strict_types=1);

namespace AppBundle\Twig\Extension;

use AppBundle\Taxation\TaxCalculator;
use AppBundle\Taxation\TaxRates;

final class TaxCalculatorExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('apply_tax_rate_one', [$this, 'applyTaxRateOne']),
            new \Twig_Filter('apply_tax_rate_two', [$this, 'applyTaxRateTwo']),
        ];
    }

    /**
     * @param float $amount
     *
     * @return float
     */
    public function applyTaxRateOne(float $amount): float
    {
        return TaxCalculator::calculate($amount, TaxRates::TAX_RATE_PERCENT_ONE);
    }

    /**
     * @param float $amount
     *
     * @return float
     */
    public function applyTaxRateTwo(float $amount): float
    {
        return TaxCalculator::calculate($amount, TaxRates::TAX_RATE_PERCENT_TWO);
    }
}
