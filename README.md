Decorator pattern

Implementation of the decorator pattern given a problem. 

[![Build Status](https://travis-ci.org/amacsmith/decorator-pattern.svg?branch=main)](https://travis-ci.org/amacsmith/decorator-pattern)

[![codecov](https://codecov.io/gh/amacsmith/decorator-pattern/branch/main/graph/badge.svg)](https://codecov.io/gh/amacsmith/decorator-pattern)


Usage

```
$beverage = new Espresso();
echo $beverage->getDescription().' $'.$beverage->cost();
echo PHP_EOL;

$beverage = new Decaf();
echo $beverage->getDescription().' $'.$beverage->cost();
echo PHP_EOL;

$beverage = new DarkRoast();
echo $beverage->getDescription().' $'.$beverage->cost();
echo PHP_EOL;

$beverage = new HouseBlend();
echo $beverage->getDescription().' $'.$beverage->cost();
echo PHP_EOL;

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Soy($beverage2);
$beverage2 = new Whip($beverage2);
$beverage2 = new SteamedMilk($beverage2);
echo $beverage2->getDescription().' $'.$beverage2->cost();
```
