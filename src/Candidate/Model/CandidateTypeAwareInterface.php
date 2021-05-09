<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

interface CandidateTypeAwareInterface
{
    public function getType(): ?CandidateTypeInterface;

    public function setType(?CandidateTypeInterface $type);
}
