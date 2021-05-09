<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface CandidateFinanceInterface extends ResourceInterface, CandidateAwareInterface
{
    public function getMeasure(): ?string;

    public function setMeasure(?string $value);

    public function getAmount(): ?float;

    public function setAmount(?float $value);

    public function getNote(): ?string;

    public function setNote(?string $value);
}
