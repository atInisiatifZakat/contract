<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

use Inisiatif\Package\Contract\Common\Model\FamilyRelationInterface;

interface FamilyRelationAwareInterface
{
    public function getFamily(): ?FamilyRelationInterface;

    public function setFamily(?FamilyRelationInterface $value);
}
