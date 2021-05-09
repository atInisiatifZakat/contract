<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface CandidateMedicalHistoryInterface extends ResourceInterface, CandidateAwareInterface
{
    public function getDate(): ?DateTimeInterface;

    public function setDate(?DateTimeInterface $value);

    public function getDiagnosis(): ?string;

    public function setDiagnosis(?string $value);

    public function getTreatment(): ?string;

    public function setTreatment(?string $value);

    public function getTreatmentPlace(): ?string;

    public function setTreatmentPlace(?string $value);

    public function getNote(): ?string;

    public function setNote(?string $value);
}
