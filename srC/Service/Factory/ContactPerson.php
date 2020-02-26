<?php

namespace DigitalClosuxe\ValueObject\Service\Factory;

use DigitalClosuxe\ValueObject\Service\Contact;

/**
 * Class ContactPerson
 *
 * @package DigitalClosuxe\ValueObject\Service\Factory
 */
final class ContactPerson
{
    /**
     * @param $firstName
     * @param $lastName
     * @return Contact
     */
    static public function createContact($firstName, $lastName)
    {
        $contact = new Contact();

        $contact->setFirstName($firstName);
        $contact->setLastName($lastName);

        return $contact;
    }
}