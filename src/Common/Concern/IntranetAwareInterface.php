<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

interface IntranetAwareInterface
{
    public function getIntranetId(): ?int;

    public function setIntranetId(?int $value);
}
