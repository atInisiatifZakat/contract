<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Repository;

use Inisiatif\Package\Contract\Common\Repository\ModelRepositoryInterface;

interface AuthTokenRepositoryInterface extends ModelRepositoryInterface
{
    /**
     * @param string $value
     * @return mixed
     */
    public function findOneUsingTokenKey($value);
}
