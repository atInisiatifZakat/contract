<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Project\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface ProjectInterface extends ResourceInterface
{
    public function getProgram(): ?string;

    public function setProgram(?string $value);

    public function getIdentificationNumber(): ?string;

    public function setIdentificationNumber(?string $value);

    public function getName(): ?string;

    public function setName(?string $value);

    public function getDescription(): ?string;

    public function setDescription(?string $value);

    public function getDate(): string;

    public function setDate(string $value);

    public function getStartAt(): ?string;

    public function setStartAt(?string $value);

    public function getEndAt(): ?string;

    public function setEndAt(?string $value);

    public function getExecutionAt(): ?string;

    public function setExecutionAt(?string $value);

    public function getPackage(): ?int;

    public function setPackage(?int $value);

    public function getAmount(): float;

    public function setAmount(float $value);

    public function getAmountEquivalent(): float;

    public function setAmountEquivalent(float $value);

    public function getLocationAddress(): ?string;

    public function setLocationAddress(?string $value);

    public function getLocationOverview(): ?string;

    public function setLocationOverview(?string $value);

    public function getLocationContactName(): ?string;

    public function setLocationContactName(?string $value);

    public function getLocationContactNumber(): ?string;

    public function setLocationContactNumber(?string $value);

    public function getStatus(): ?int;

    public function setStatus(?int $value);

    public function getIntranetId(): ?int;

    public function setIntranetId(?int $value);

    public function getEdonationProgramId(): ?string;

    public function setEdonationProgramId(?string $value);
}
