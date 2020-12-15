<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

use Inisiatif\Package\Contract\Common\Model\EducationTypeInterface;
use Inisiatif\Package\Contract\Common\Model\EducationStatusInterface;

interface EducationAwareInterface
{
    public function getType(): EducationTypeInterface;

    /**
     * @return mixed
     */
    public function setType(EducationTypeInterface $value);

    public function getInstitutionName(): string;

    /**
     * @return mixed
     */
    public function setInstitutionName(string $value);

    public function getEnterYear(): int;

    /**
     * @return mixed
     */
    public function setEnterYear(int $value);

    public function getGraduatedYear(): ?int;

    /**
     * @return mixed
     */
    public function setGraduatedYear(int $value);

    public function getStatus(): EducationStatusInterface;

    /**
     * @return mixed
     */
    public function setStatus(EducationStatusInterface $value);
}
