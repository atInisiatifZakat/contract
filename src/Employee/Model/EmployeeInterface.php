<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Employee\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\BranchAwareInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface EmployeeInterface extends ResourceInterface, ToggleAwareInterface, BranchAwareInterface
{
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
}
