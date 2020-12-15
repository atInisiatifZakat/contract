<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Employee\Model;

use DateTimeInterface;
use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\BranchAwareInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface EmployeeInterface extends ResourceInterface, ToggleAwareInterface, BranchAwareInterface
{
    public function getType(): string;

    /**
     * @return mixed
     */
    public function setType(string $value);

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

    public function getPhoneNumber(): string;

    /**
     * @return mixed
     */
    public function setPhoneNumber(string $phoneNumber);

    public function getRegisteredAt(): DateTimeInterface;

    /**
     * @return mixed
     */
    public function setRegisteredAt(DateTimeInterface $value);

    public function getDisabledAt(): DateTimeInterface;

    /**
     * @return mixed
     */
    public function setDisabledAt(DateTimeInterface $value);
}
