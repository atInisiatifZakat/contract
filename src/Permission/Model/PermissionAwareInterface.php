<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Permission\Model;

interface PermissionAwareInterface
{
    public function givePermissionTo(...$permissions);

    public function revokePermissionTo($permission);

    public function syncPermissions(...$permissions);
}
