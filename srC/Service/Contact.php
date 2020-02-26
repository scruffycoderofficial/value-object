<?php

namespace DigitalClosuxe\ValueObject\Service;

use DigitalClosuxe\ValueObject\Person;
use DigitalClosuxe\ValueObject\Concern\ContactProperties;

/**
 * Class Contact
 *
 * @package DigitalClosuxe\ValueObject\Service
 */
class Contact extends Person
{
    use ContactProperties;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->firstName;
    }

    public function getFullnames()
    {
        return sprintf("%s %s", $this->getFirstName(), $this->getLastname());
    }
}