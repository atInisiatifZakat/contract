<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

interface ToggleAwareInterface
{
    public function isActive(): bool;

    /**
     * @return mixed
     */
    public function setIsActive(bool $value);
}
