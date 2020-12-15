<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface UserInterface extends ResourceInterface
{
    public function getUsername(): string;

    /**
     * @return mixed
     */
    public function setUsername(string $value);

    public function getName(): string;

    /**
     * @return mixed
     */
    public function setName(string $value);

    public function getEmail(): string;

    /**
     * @return mixed
     */
    public function setEmail(string $value);

    public function getPassword(): string;

    /**
     * @return mixed
     */
    public function setPassword(string $value);

    public function getDeactivatedAt(): ?DateTimeInterface;

    /**
     * @return mixed
     */
    public function setDeactivatedAt(?DateTimeInterface $date = null);
}
