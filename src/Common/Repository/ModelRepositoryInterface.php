<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Repository;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;

interface ModelRepositoryInterface
{
    public function save(ResourceInterface $resource): bool;

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
