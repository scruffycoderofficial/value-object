<?php

namespace DigitalClosuxe\ValueObject\Service;

use DigitalClosuxe\ValueObject\Person;
use DigitalClosuxe\ValueObject\Contract\IdentityAware;
use DigitalClosuxe\ValueObject\Contract\ContactIdentifier;
use DigitalClosuxe\ValueObject\Concern\ContactProperties;

/**
 * Class Contact
 *
 * @package DigitalClosuxe\ValueObject\Service
 */
class Contact extends Person implements IdentityAware
{
    protected $id;

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

    /**
     * Returns full names of this Contact Person
     *
     * NB: This method only takes into account the first and
     *     last name and nothing else
     *
     * @return string
     */
    public function getFullnames()
    {
        return sprintf("%s %s", $this->getFirstName(), $this->getLastname());
    }

    /** {@inheritDoc} */
    public function setIdentity(ContactIdentifier $identifier)
    {
        if(!is_null($this->id)){
            return;
        }
        $this->id = $identifier;
    }
}