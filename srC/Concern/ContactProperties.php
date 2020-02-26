<?php

namespace DigitalClosuxe\ValueObject\Concern;

/**
 * Trait ContactProperties
 *
 * @package DigitalClosuxe\ValueObject\Concern
 */
trait ContactProperties
{
    public function setFirstName($firstName)
    {
        if(!property_exists(get_called_class(), 'firstName')){
            throw new \RuntimeExcetion("Contact Component Service is missing property.");
        }

        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        if(!property_exists(get_called_class(), 'lastName')){
            throw new \RuntimeExcetion("Contact Component Service is missing property.");
        }

        $this->lastName = $lastName;
    }
}