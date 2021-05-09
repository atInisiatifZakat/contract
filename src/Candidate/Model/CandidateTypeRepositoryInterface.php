<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Model;

use Inisiatif\Package\Contract\Common\Repository\ModelRepositoryInterface;
use Inisiatif\Package\Contract\Common\Repository\RequestFilterAwareInterface;

interface CandidateTypeRepositoryInterface extends ModelRepositoryInterface, RequestFilterAwareInterface
{
}
