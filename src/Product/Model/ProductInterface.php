<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Product\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface ProductInterface extends ResourceInterface
{
    public function getName(): string;

    /**
     * @return mixed
     */
    public function setName(string $value);
}
