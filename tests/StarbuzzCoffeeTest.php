<?php

namespace AMacSmith\DecoratorPattern\Tests;

use AMacSmith\DecoratorPattern\Beverages\DarkRoast;
use AMacSmith\DecoratorPattern\Beverages\Decaf;
use AMacSmith\DecoratorPattern\Beverages\Espresso;
use AMacSmith\DecoratorPattern\Beverages\HouseBlend;
use AMacSmith\DecoratorPattern\Condiments\Mocha;
use AMacSmith\DecoratorPattern\Condiments\Soy;
use AMacSmith\DecoratorPattern\Condiments\SteamedMilk;
use AMacSmith\DecoratorPattern\Condiments\Whip;
use PHPUnit\Framework\TestCase;

class StarbuzzCoffeeTest extends TestCase
{
    public function test_can_make_beverages()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription().' $'.$beverage->cost();
        $this->assertEquals('Espresso $1.99', $beverage->getDescription().' $'.$beverage->cost());
        echo PHP_EOL;

        $beverage = new Decaf();
        echo $beverage->getDescription().' $'.$beverage->cost();
        $this->assertEquals('Decaf $1.05', $beverage->getDescription().' $'.$beverage->cost());
        echo PHP_EOL;

        $beverage = new DarkRoast();
        echo $beverage->getDescription().' $'.$beverage->cost();
        $this->assertEquals('Dark Roast $0.99', $beverage->getDescription().' $'.$beverage->cost());
        echo PHP_EOL;

        $beverage = new HouseBlend();
        echo $beverage->getDescription().' $'.$beverage->cost();
        $this->assertEquals('House Blend $0.89', $beverage->getDescription().' $'.$beverage->cost());
        echo PHP_EOL;

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Soy($beverage2);
        $beverage2 = new Whip($beverage2);
        $beverage2 = new SteamedMilk($beverage2);
        echo $beverage2->getDescription().' $'.$beverage2->cost();

        $this->assertEquals('Dark Roast, Mocha, Soy, Whip, Steamed Milk $1.54', $beverage2->getDescription().' $'.$beverage2->cost());
    }
}
