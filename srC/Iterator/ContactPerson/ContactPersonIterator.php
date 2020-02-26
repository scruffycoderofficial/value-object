<?php

namespace DigitalClosuxe\ValueObject\Iterator\ContactPerson;

/**
 * Class ContactPersonIterator
 *
 * @package DigitalClosuxe\ValueObject\Iterator\ContactPerson
 */
class ContactPersonIterator extends PersonIterator
{
    protected $_iterator;

    protected $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function first()
    {
        return $this->_iterator = 0;
    }

    public function next()
    {
        return ++$this->_iterator;
    }

    public function hasMore()
    {
        return isset($this->data[$this->_iterator]);
    }

    public function current()
    {
        return $this->_array[$this->_iterator];
    }
}