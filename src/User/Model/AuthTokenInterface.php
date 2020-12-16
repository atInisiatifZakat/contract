<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface AuthTokenInterface extends ResourceInterface
{
    public function getTokenKey(): ?string;

    /**
     * @return mixed
     */
    public function setTokenKey(?string $value);

    public function getToken(): ?string;

    /**
     * @return mixed
     */
    public function setToken(?string $value);

    public function getExpiredTime(): ?DateTimeInterface;

    /**
     * @return mixed
     */
    public function setExpiredTime(?DateTimeInterface $value);

    public function getUser(): ?UserInterface;

    /**
     * @return mixed
     */
    public function setUser(?UserInterface $user);
}
