<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

interface CandidateTypeAwareInterface
{
    public function getTypeId(): ?CandidateTypeInterface;

    public function setTypeId(?CandidateTypeInterface $type);
}
