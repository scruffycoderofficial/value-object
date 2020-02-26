<?php

namespace DigitalClosuxe\ValueObject\Iterator\ContactPerson;

abstract class PersonIterator
{
    abstract public function first();

    abstract public function next();

    abstract public function hasMore();

    abstract public function current();

}