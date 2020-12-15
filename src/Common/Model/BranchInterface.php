<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

use Inisiatif\Package\Contract\Address\Model\AddressAwareInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface BranchInterface extends ResourceInterface, ToggleAwareInterface, AddressAwareInterface
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

    public function isHeadOffice(): bool;

    /**
     * @return mixed
     */
    public function setIsHeadOffice(bool $value);

    public function isActive(): bool;

    /**
     * @return mixed
     */
    public function setIsActive(bool $value);

    public function getParent(): ?self;

    /**
     * @return mixed
     */
    public function setParent(?self $branch);
}
