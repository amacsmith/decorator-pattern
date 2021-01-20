<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;

class Whip extends CondimentDecorator
{
    /**
     * Whip constructor.
     * @param Beverage $beverage
     */
    public function __construct(private Beverage $beverage){}

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Whip';
    }
}