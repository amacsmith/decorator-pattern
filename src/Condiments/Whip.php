<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;

class Whip extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * Whip constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage){
        $this->beverage = $beverage;
    }

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