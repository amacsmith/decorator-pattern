<?php

namespace AMacSmith\DecoratorPattern\Beverages;

use AMacSmith\DecoratorPattern\Beverage;

class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     */
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 1.05;
    }
}
