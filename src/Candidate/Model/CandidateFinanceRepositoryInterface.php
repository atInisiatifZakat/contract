<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Repository\ModelRepositoryInterface;
use Inisiatif\Package\Contract\Common\Repository\RequestFilterAwareInterface;

interface CandidateFinanceRepositoryInterface extends ModelRepositoryInterface, RequestFilterAwareInterface
{
}
