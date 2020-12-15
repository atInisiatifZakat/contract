<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface ProfessionInterface extends ResourceInterface, ToggleAwareInterface
{
    public function getDescription(): string;

    /**
     * @return mixed
     */
    public function setDescription(string $value);
}
