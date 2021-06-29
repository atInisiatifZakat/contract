<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

interface InstitutionCandidateAwareInterface
{
    public function getInstitution(): ?InstitutionCandidateInterface;

    public function setInstitution(?InstitutionCandidateInterface $type);
}
