<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Address\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;
use Inisiatif\Package\Contract\Common\Concern\CoordinateAwareInterface;

interface ProvinceInterface extends ResourceInterface, CountryAwareInterface, ToggleAwareInterface, CoordinateAwareInterface
{
    public function getCode(): string;

    public function getName(): string;

    /**
     * @return mixed
     */
    public function setCode(string $code);

    /**
     * @return mixed
     */
    public function setName(string $name);
}
