<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Address\Model;

interface VillageAwareInterface
{
    public function getVillage();

    public function setVillage($village);
}
