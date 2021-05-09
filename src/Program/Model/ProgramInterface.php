<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Program\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface ProgramInterface extends ResourceInterface, ToggleAwareInterface
{
    public function getName(): string;

    /**
     * @return mixed
     */
    public function setName(string $value);
}
