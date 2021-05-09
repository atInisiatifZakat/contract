<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Address\Model;

interface CountryAwareInterface
{
    public function getCountry(): ?int;

    /**
     * @return mixed
     */
    public function setCountry(?int $country);
}
