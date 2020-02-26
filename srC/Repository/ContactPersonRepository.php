<?php

namespace DigitalClosuxe\ValueObject\Repository;

use DigitalClosuxe\ValueObject\Service\Contact;
use DigitalClosuxe\ValueObject\ContactIdentifier;
use DigitalClosuxe\ValueObject\Service\Factory\ContactPerson;
use DigitalClosuxe\ValueObject\Service\EventData\ContactCreated;

/**
 * Class ContactPersonRepository
 *
 * @package DigitalClosuxe\ValueObject\Repository
 */
final class ContactPersonRepository
{
    /**
     * @param ContactIdentifier $contactId
     * @param $firstName
     * @param $lastName
     * @return mixed
     * @throws \Exception
     */
    public function addNewContact(ContactIdentifier $contactId, $firstName, $lastName)
    {
        try{

            return $this->assignIdentity($contactId, ContactPerson::createFromDomainEvent(
                new ContactCreated([
                    'firstName' => $firstName,
                    'lastName' => $lastName
                ])));

        }catch(\Exception $exc){
            throw new \Exception("Contact Person could not be created.");
        }
    }

    /**
     * Performs an action as a result of a call from the Domain Service
     *
     * @param $contactId
     * @param Contact $contact
     * @return mixed|void
     */
    private function assignIdentity($contactId, Contact $contact)
    {
        return $contact->setIdentity($contactId);
    }
}