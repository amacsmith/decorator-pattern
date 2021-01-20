<?php

namespace AMacSmith\DecoratorPattern\Beverages;

use AMacSmith\DecoratorPattern\Beverage;

class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 1.99;
    }
}