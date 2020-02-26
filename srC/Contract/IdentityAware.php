<?php

namespace DigitalClosuxe\ValueObject\Contract;

/**
 * Interface IdentityAware
 *
 * @package DigitalClosuxe\ValueObject\Contract
 */
interface IdentityAware
{
    /**
     * @param ContactIdentifier $identifier
     * @return mixed
     */
    public function setIdentity(ContactIdentifier $identifier);
}