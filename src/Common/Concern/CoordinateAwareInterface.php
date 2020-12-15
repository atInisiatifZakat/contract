<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Common\Concern;

interface CoordinateAwareInterface
{
    public function getLatitude(): ?float;

    /**
     * @return mixed
     */
    public function setLatitude(?float $value);

    public function getLongitude(): ?float;

    /**
     * @return mixed
     */
    public function setLongitude(?float $value);
}
