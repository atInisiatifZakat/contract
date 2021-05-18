<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

interface BankAccountInterface extends ResourceInterface
{
    public function getName(): ?string;

    /**
     * @return mixed
     */
    public function setName(?string $name);

    public function getNumber(): ?string;

    /**
     * @return mixed
     */
    public function setNumber(?string $number);
}
