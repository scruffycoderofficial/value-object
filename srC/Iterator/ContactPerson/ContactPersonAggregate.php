<?php

namespace DigitalClosuxe\ValueObject\Iterator\ContactPerson;

/**
 * Class ContactPersonAggregate
 *
 * @package DigitalClosuxe\ValueObject\Iterator\ContactPerson
 */
abstract class ContactPersonAggregate
{
    /**
     * @return mixed
     */
    abstract public function createIterator();
}