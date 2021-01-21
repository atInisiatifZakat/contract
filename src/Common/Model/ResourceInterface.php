<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

interface ResourceInterface
{
    /**
     * @return integer|string|null
     */
    public function getId();

    /**
     * @param integer|string $id
     *
     * @return mixed
     */
    public function setId($id);
}
