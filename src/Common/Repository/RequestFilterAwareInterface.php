<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface RequestFilterAwareInterface
{
    public function filter($request): LengthAwarePaginator;
}
