<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Event;

interface ModelEventInterface
{
    /**
     * @return mixed
     */
    public function getModel();
}
