<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface CandidateEducationInterface extends ResourceInterface, CandidateAwareInterface
{
    public function getType(): ?string;

    public function setType(?string $value);

    public function getInstitutionName(): string;

    public function setInstitutionName(?string $value);

    public function getEnterYear(): ?int;

    public function setEnterYear(?int $value);

    public function getGraduatedYear(): ?int;

    public function setGraduatedYear(?int $value);

    public function getStatus(): ?string;

    public function setStatus(?string $value);

    public function getNote(): ?string;

    public function setNote(?string $value);
}
