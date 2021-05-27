<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Address\Model\AddressAwareInterface;
use Inisiatif\Package\Contract\Address\Model\CountryAwareInterface;

interface PersonalCandidateInterface extends ResourceInterface, CandidateAwareInterface, AddressAwareInterface, CountryAwareInterface, InstitutionCandidateAwareInterface
{
    public function getFamilyCardNumber(): ?string;

    public function setFamilyCardNumber(?string $value);

    public function getBirthPlace(): ?string;

    public function setBirthPlace(?string $value);

    public function getBirthDate(): ?DateTimeInterface;

    public function setBirthDate(?DateTimeInterface $value);

    public function getAge(): ?int;

    public function setAge(?int $value);

    public function getAgeGroup(): ?string;

    public function setAgeGroup(?string $value);

    public function getGender(): ?string;

    public function setGender(?string $value);

    public function getMaritalStatus(): ?int;

    public function setMaritalStatus(?int $value);

    public function getReligion(): ?int;

    public function setReligion(?int $value);

    public function getBloodType(): ?string;

    public function setBloodType(?string $value);

    public function getProfessionId(): ?int;

    public function setProfessionId(?int $value);

    public function getMobilePhoneNumber(): ?string;

    public function setMobilePhoneNumber(?string $value);

    public function getEducationDegree(): ?int;

    public function setEducationDegree(?int $value);

    public function getNote(): ?string;

    public function setNote(?string $value);
}
