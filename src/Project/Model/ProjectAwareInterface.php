<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Project\Model;

interface ProjectAwareInterface
{
    public function getProject(): ?ProjectInterface;

    public function setProject(?ProjectInterface $value);
}
