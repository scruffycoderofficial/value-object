<?php

namespace DigitalClosuxe\ValueObject\Service\Factory;

use DigitalClosuxe\ValueObject\Service\Contact;
use DigitalClosuxe\ValueObject\Service\EventData\ContactCreated;

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

    /**
     * @param ContactCreated $eventData
     * @return Contact
     * @throws \Exception
     */
    static public function createFromDomainEvent(ContactCreated $eventData)
    {
        if(!$eventData->validateProperties()){
            throw new \Exception("Invalid expected value object service properties.");
        }

        return static::createContact($eventData['firstName'], $eventData['lastName']);
    }
}