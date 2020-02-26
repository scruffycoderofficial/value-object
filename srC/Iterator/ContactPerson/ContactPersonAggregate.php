<?php

namespace DigitalClosuxe\ValueObject\Iterator\ContactPerson;

/**
 * Class ContactPersonAggregate
 *
 * @package DigitalClosuxe\ValueObject\Iterator\ContactPerson
 */
class ContactPersonAggregate extends PersonAggregate
{
    /**
     * @var $_personIterator
     */
    private $_personIterator;

    /**
     * @var $_personAggreagate
     */
    private $_personAggreagate;

    public function __construct(array $data)
    {
        $this->_personAggreagate = $data;
    }

    /**
     * @return mixed
     */
    public function createIterator()
    {
        $this->_personIterator = new ContactPersonIterator($this->_personAggreagate);
        return $this->_personIterator;
    }
}