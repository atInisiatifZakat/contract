<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

interface ResourceInterface
{
    /**
     * @return int|string|null
     */
    public function getId();

    /**
     * @param  int|string  $id
     * @return mixed
     */
    public function setId($id);
}
