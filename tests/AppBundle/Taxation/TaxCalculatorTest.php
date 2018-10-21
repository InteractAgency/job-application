<?php

declare(strict_types=1);

namespace Tests\AppBundle\Taxation;

use AppBundle\Taxation\TaxCalculator;
use AppBundle\Taxation\TaxRates;
use PHPUnit\Framework\TestCase;

final class TaxCalculatorTest extends TestCase
{
    public function testCalculate()
    {
        $this->assertEquals(0.00, TaxCalculator::calculate(0.00, TaxRates::TAX_RATE_PERCENT_ONE));
        $this->assertEquals(1.17, TaxCalculator::calculate(1.00, TaxRates::TAX_RATE_PERCENT_ONE));
        $this->assertEquals(1.4274, TaxCalculator::calculate(1.22, TaxRates::TAX_RATE_PERCENT_ONE));
        $this->assertEquals(0.00, TaxCalculator::calculate(0.00, TaxRates::TAX_RATE_PERCENT_TWO));
        $this->assertEquals(1.20, TaxCalculator::calculate(1.00, TaxRates::TAX_RATE_PERCENT_TWO));
        $this->assertEquals(1.464, TaxCalculator::calculate(1.22, TaxRates::TAX_RATE_PERCENT_TWO));
    }
}
