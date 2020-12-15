<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Address\Model;

use Inisiatif\Package\Contract\Common\Model\ResourceInterface;
use Inisiatif\Package\Contract\Common\Concern\ToggleAwareInterface;
use Inisiatif\Package\Contract\Common\Concern\CoordinateAwareInterface;

interface CountryInterface extends ResourceInterface, ToggleAwareInterface, CoordinateAwareInterface
{
    public function getName(): string;

    public function getTwoLetterCode(): string;

    public function getThreeLetterCode(): string;

    /**
     * @return mixed
     */
    public function setName(string $name);

    /**
     * @return mixed
     */
    public function setTwoLetterCode(string $code);

    /**
     * @return mixed
     */
    public function setThreeLetterCode(string $code);
}
