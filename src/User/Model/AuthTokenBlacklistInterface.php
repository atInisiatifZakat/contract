<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface AuthTokenBlacklistInterface extends ResourceInterface
{
    public function getTokenKey(): ?string;

    public function setTokenKey(?string $value);

    public function getTokenValues(): array;

    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function setTokenValues($value);

    public function getExpiredAt(): DateTimeInterface;

    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function setExpiredAt($value);
}
