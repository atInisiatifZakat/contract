<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Candidate\Repository;

use Inisiatif\Package\Contract\Common\Repository\ModelRepositoryInterface;
use Inisiatif\Package\Contract\Common\Repository\RequestFilterAwareInterface;

interface PersonalCandidateRepositoryInterface extends ModelRepositoryInterface, RequestFilterAwareInterface
{
}
