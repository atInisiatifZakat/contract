<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Repository;

use Inisiatif\Package\Contract\Common\Repository\ModelRepositoryInterface;

interface AuthTokenBlacklistRepositoryInterface extends ModelRepositoryInterface
{
    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function findOneUsingTokenKey($value);
}
