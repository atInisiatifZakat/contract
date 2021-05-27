<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Address\Model;

interface AddressAwareInterface extends VillageAwareInterface
{
    public function getAddress(): ?string;

    public function getPostalCode(): ?string;

    public function getPhoneNumber(): ?string;

    public function setAddress(?string $address);

    public function setPostalCode(?string $postalCode);

    public function setPhoneNumber(?string $phoneNumber);
}
