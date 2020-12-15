<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface TokenInterface extends ResourceInterface, ToggleAwareInterface
{
    public function getKeyToken(): string;

    /**
     * @return mixed
     */
    public function setKeyToken(string $value);

    public function getToken(): string;

    /**
     * @return mixed
     */
    public function setToken(string $value);

    public function getExpiredAt(): ?DateTimeInterface;

    /**
     * @return mixed
     */
    public function setExpiredAt(?DateTimeInterface $time);
}
