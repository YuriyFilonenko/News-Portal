<?php

namespace App\Model;

/**
 * Contact DTO.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
final class Contact
{
    private $contactText;
    private $address;
    private $email;
    private $telephone;
    private $addressText;

    public function __construct(
        string $contactText,
        string $address,
        string $email,
        string $telephone,
        string $addressText
    ) {
        $this->contactText = $contactText;
        $this->address = $address;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->addressText = $addressText;
    }

    public function getContactText(): string
    {
        return $this->contactText;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function getAddressText(): string
    {
        return $this->addressText;
    }
}
