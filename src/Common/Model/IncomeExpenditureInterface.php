<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Model;

use Inisiatif\Package\Contract\Common\Concern\DomainTypeInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;

interface IncomeExpenditureInterface extends ResourceInterface, DomainTypeInterface, ToggleAwareInterface
{
    public const TYPE_INCOME = 'PENDAPATAN';

    public const TYPE_SPENDING = 'PENGELUARAN';
}
