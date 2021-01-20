<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    /**
     * Mocha constructor.
     * @param Beverage $beverage
     */
    public function __construct(private Beverage $beverage){}

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + .20;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Mocha';
    }
}