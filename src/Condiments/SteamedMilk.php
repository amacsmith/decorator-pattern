<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;
use AMacSmith\DecoratorPattern\Description;

class SteamedMilk extends CondimentDecorator
{
    /**
     * SteamedMilk constructor.
     * @param Beverage $beverage
     */
    public function __construct(private Beverage $beverage){}

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Steamed Milk';
    }
}