<?php

namespace AMacSmith\DecoratorPattern\Beverages;

use AMacSmith\DecoratorPattern\Beverage;

class DarkRoast extends Beverage
{
    /**
     * DarkRoast constructor.
     */
    public function __construct()
    {
        $this->description = 'Dark Roast';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .99;
    }
}