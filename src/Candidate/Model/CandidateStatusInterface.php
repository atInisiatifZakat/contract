<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface CandidateStatusInterface extends ResourceInterface, ToggleAwareInterface
{
    public function getDescription(): ?string;

    public function setDescription(?string $value);
}
