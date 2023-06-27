<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Permission\Repository;

use Inisiatif\Package\Contract\Permission\Model\RoleInterface;
use Inisiatif\Package\Contract\Permission\Model\RoleAwareInterface;

interface RoleRepositoryInterface
{
    public function save(RoleInterface $role): bool;

    public function assignRoleTo(RoleAwareInterface $model, ...$roles): bool;

    public function removeRoleTo(RoleAwareInterface $model, $role): bool;

    public function syncRolesTo(RoleAwareInterface $model, ...$roles): bool;

    /**
     * @param  string|int  $id
     * @return mixed
     */
    public function findUsingId($id);

    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function findOneUsingColumn(string $column, $value);

    /**
     * @return mixed
     */
    public function findOneUsingColumns(array $columns);

    /**
     * @param  mixed  $value
     * @return mixed
     */
    public function findUsingColumn(string $column, $value);

    /**
     * @return mixed
     */
    public function findUsingColumns(array $columns);
}
