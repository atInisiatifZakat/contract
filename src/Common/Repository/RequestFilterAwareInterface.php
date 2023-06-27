<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Repository;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface RequestFilterAwareInterface
{
    /**
     * @param  Request  $request
     */
    public function filter($request): LengthAwarePaginator;
}
