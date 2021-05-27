<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Address\Model\AddressAwareInterface;
use Inisiatif\Package\Contract\Address\Model\CountryAwareInterface;

interface InstitutionCandidateInterface extends ResourceInterface, CandidateAwareInterface, AddressAwareInterface, CountryAwareInterface
{
    public function getContactPerson(): ?string;

    public function setContactPerson(?string $value);

    public function getContactPersonPosition(): ?string;

    public function setContactPersonPosition(?string $value);

    public function getMobilePhoneNumber(): ?string;

    public function setMobilePhoneNumber(?string $value);

    public function getPhoneNumber(): ?string;

    public function setPhoneNumber(?string $phoneNumber);

    public function getNote(): ?string;

    public function setNote(?string $value);
}
