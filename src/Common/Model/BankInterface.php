<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

interface BankInterface extends ResourceInterface
{
    public function getName(): ?string;

    /**
     * @return mixed
     */
    public function setName(?string $name);
}
