<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

interface UserAwareInterface
{
    /**
     * @return mixed
     */
    public function getUser();

    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function setUser($value);
}
