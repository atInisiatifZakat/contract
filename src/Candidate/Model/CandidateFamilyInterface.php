<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\FamilyRelationAwareInterface;

interface CandidateFamilyInterface extends ResourceInterface, CandidateAwareInterface, FamilyRelationAwareInterface
{
    public function isDead(): bool;

    public function setIsDead(bool $value);

    public function getNote(): ?string;

    public function setNote(?string $value);
}
