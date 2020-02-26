<?php

namespace DigitalClosuxe\ValueObject\Iterator\ContactPerson;

/**
 * Class PersonAggregate
 *
 * @package DigitalClosuxe\ValueObject\Iterator\ContactPerson
 */
abstract class PersonAggregate
{
    /**
     * @return mixed
     */
    abstract public function createIterator();
}