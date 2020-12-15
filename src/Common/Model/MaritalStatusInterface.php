<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

use Inisiatif\Package\Contract\Common\Concern\DomainTypeInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface MaritalStatusInterface extends ResourceInterface, DomainTypeInterface, ToggleAwareInterface
{
}
