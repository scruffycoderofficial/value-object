<?php

namespace DigitalClosuxe\ValueObject\Service\EventData;

/**
 * Class ContactCreated
 *
 * @package DigitalClosuxe\ValueObject\Service\EventData
 */
final class ContactCreated
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * ValueObject attribute list to validate against
     */
    const EXPECTED_ATTRIBUTES = [
        'firstName',
        'lastName'
    ];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getEventData()
    {
        return $this->data;
    }

    /**
     * @return bool
     */
    public function validateProperties()
    {
        $expectedAttributeExists = false;
        foreach(self::EXPECTED_ATTRIBUTES as $attrubute){
            if(array_key_exists($attrubute, array_keys($this->data))){
                $expectedAttributeExists = true;
            }
        }
        return $expectedAttributeExists;
    }
}