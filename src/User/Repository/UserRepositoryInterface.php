<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Repository;

use Inisiatif\Package\Contract\User\Model\UserInterface;
use Inisiatif\Package\Contract\Common\Repository\ModelRepositoryInterface;

interface UserRepositoryInterface extends ModelRepositoryInterface
{
    public function findUsingEmailOrUsername(string $value): ?UserInterface;
}
