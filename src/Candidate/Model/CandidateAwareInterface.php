<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

interface CandidateAwareInterface
{
    public function getCandidate(): ?CandidateInterface;

    public function setCandidate(?CandidateInterface $value);
}
