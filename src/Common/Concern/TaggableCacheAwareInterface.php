<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

use Illuminate\Cache\TaggedCache;

interface TaggableCacheAwareInterface
{
    public function getTagName(): string;

    public function getCache(): TaggedCache;

    /**
     * @return mixed
     */
    public function setCache(TaggedCache $cache);
}
