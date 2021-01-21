<?php

namespace AMacSmith\DecoratorPattern\Condiments;

use AMacSmith\DecoratorPattern\Beverage;
use AMacSmith\DecoratorPattern\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    private Beverage $beverage;

    /**
     * Mocha constructor.
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