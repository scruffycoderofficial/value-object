<?php

namespace DigitalClosuxe\ValueObject;

/**
 * Class Person
 *
 * @package DigitalClosuxe\ValueObject
 */
abstract class Person
{
    /**
     * @var string $firstName
     */
    protected $firstName;

    /**
     * @var string $lastName
     */
    protected $lastName;

    /**
     * @return string
     */
    abstract public function getFirstName(): string;

    /**
     * @return string
     */
    abstract public function getLastname(): string;
}