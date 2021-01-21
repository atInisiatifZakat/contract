<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Repository;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\ConnectionInterface;

interface EloquentAwareRepositoryInterface
{
    public function getModel(): Model;

    public function getConnection(): ConnectionInterface;

    public function transaction(Closure $callback, int $attempts = 1);

    public function beginTransaction(): void;

    public function commit(): void;

    public function rollBack(): void;
}
