<?php

namespace DigitalClosuxe\ValueObject;

/**
 * Class PersonValueObject
 *
 * @package DigitalClosuxe\ValueObject
 */
abstract class PersonValueObject
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