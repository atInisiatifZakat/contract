<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Partner\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\BranchAwareInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface PartnerInterface extends ResourceInterface, ToggleAwareInterface, BranchAwareInterface
{
    public function getName(): string;

    /**
     * @return mixed
     */
    public function setName(string $value);
}
