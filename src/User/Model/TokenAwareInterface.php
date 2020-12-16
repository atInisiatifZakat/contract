<?php declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

interface TokenAwareInterface
{
    public function getToken(): string;
}
