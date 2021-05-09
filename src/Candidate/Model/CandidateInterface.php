<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface CandidateInterface extends ResourceInterface, CandidateTypeAwareInterface, CandidateStatusAwareInterface
{
    public function getIdentificationNumber(): ?string;

    public function setIdentificationNumber(?string $value);

    public function getName(): ?string;

    public function setName(?string $value);

    public function getNickName(): ?string;

    public function setNickName(?string $value);

    public function getNationality(): ?string;

    public function setNationality(?string $value);

    public function getIdentityType(): ?string;

    public function setIdentityType(?string $value);

    public function getIdentityNumber(): ?string;

    public function setIdentityNumber(?string $value);

    public function getProfile(): ?string;

    public function setProfile(?string $value);
}
