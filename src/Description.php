<?php
// @codeCoverageIgnoreStart
namespace AMacSmith\DecoratorPattern;

/**
 * Interface Description
 * @package AMacSmith\DecoratorPattern
 *
 * could be used to signal the need to implement the getDescrition method because php does not allow the overriding of a
 * non-abstract method to an abstract method
 */
interface Description
{
    public function getDescription(): string;
}