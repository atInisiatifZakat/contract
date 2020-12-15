<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Permission\Model;

interface RoleAwareInterface
{
    public function assignRole(...$roles);

    public function removeRole($role);

    public function syncRoles(...$roles);
}
