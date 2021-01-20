<?php

namespace AMacSmith\DecoratorPattern;

abstract class CondimentDecorator extends Beverage
{
    /**
     * @var Beverage
     */
    private Beverage $beverage;
}