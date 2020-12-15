<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

interface DomainTypeInterface
{
    public function getType(): string;

    /**
     * @return mixed
     */
    public function setType(string $value);

    public function getDescription(): string;

    /**
     * @return mixed
     */
    public function setDescription(string $value);
}
