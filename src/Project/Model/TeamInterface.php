<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Project\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Application\EasyDonation\Foundation\Entities\Employee;

interface TeamInterface extends ResourceInterface, ProjectAwareInterface
{
    public function getEmployee(): ?Employee;

    public function setEmployee(?string $value);

    public function getRole(): ?string;

    public function setRole(?string $value);
}
