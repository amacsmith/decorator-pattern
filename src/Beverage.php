<?php

namespace AMacSmith\DecoratorPattern;

abstract class Beverage implements BeverageContract
{
    /**
     * @var string
     */
    protected string $description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
