<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;

class Soy extends CondimentDecorator
{
    /**
     * Soy constructor.
     * @param Beverage $beverage
     */
    public function __construct(private Beverage $beverage){}

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + .15;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Soy';
    }
}