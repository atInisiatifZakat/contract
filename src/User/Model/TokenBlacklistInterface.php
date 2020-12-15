<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface TokenBlacklistInterface extends ResourceInterface
{
    public function getKeyToken(): string;

    /**
     * @return mixed
     */
    public function setKeyToken(string $value);

    public function getPayload(): array;

    /**
     * @param mixed $value
     * @return mixed
     */
    public function setPayload($value);
}
