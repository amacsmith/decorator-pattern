<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;

class SteamedMilk extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * SteamedMilk constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Steamed Milk';
    }
}
