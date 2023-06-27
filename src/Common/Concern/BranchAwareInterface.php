<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

interface BranchAwareInterface
{
    /**
     * @return mixed
     */
    public function getBranch();

    /**
     * @param  mixed  $branch
     * @return mixed
     */
    public function setBranch($branch);
}
