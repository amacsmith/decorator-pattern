<?php

namespace AMacSmith\DecoratorPattern\Beverages;

use AMacSmith\DecoratorPattern\Beverage;

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     */
    public function __construct()
    {
        $this->description = 'House Blend';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .89;
    }
}