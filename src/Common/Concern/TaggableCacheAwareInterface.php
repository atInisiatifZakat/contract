<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

use Illuminate\Contracts\Cache\Factory;
use Illuminate\Contracts\Cache\Repository;

interface TaggableCacheAwareInterface
{
    public function getTagName(): string;

    public function getCache(): Repository;

    /**
     * @return mixed
     */
    public function setCache(Factory $factory);
}
