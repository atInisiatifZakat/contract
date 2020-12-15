<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Permission\Repository;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Permission\Model\PermissionAwareInterface;

interface PermissionRepositoryInterface
{
    public function save(ResourceInterface $permission): bool;

    public function givePermissionTo(PermissionAwareInterface $model, ...$permissions): bool;

    public function revokePermissionTo(PermissionAwareInterface $model, $permission): bool;

    public function syncPermissions(PermissionAwareInterface $model, ...$permissions): bool;

    /**
     * @param string|int $id
     * @return mixed
     */
    public function findUsingId($id);

    /**
     * @param mixed $value
     * @return mixed
     */
    public function findOneUsingColumn(string $column, $value);

    /**
     * @return mixed
     */
    public function findOneUsingColumns(array $columns);

    /**
     * @param mixed $value
     * @return mixed
     */
    public function findUsingColumn(string $column, $value);

    /**
     * @return mixed
     */
    public function findUsingColumns(array $columns);
}
