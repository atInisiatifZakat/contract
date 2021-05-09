<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

interface CandidateStatusAwareInterface
{
    public function getStatus(): ?CandidateStatusInterface;

    public function setStatus(?CandidateStatusInterface $value);
}
