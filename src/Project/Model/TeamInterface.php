<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Project\Model;

use Inisiatif\Package\User\Models\Employee;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface TeamInterface extends ResourceInterface, ProjectAwareInterface
{
    public function getEmployee(): ?Employee;

    public function setEmployee(?string $value);

    public function getRole(): ?string;

    public function setRole(?string $value);
}
