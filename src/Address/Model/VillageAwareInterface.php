<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\Address\Model;

interface VillageAwareInterface
{
    /**
     * @return mixed
     */
    public function getVillage();

    /**
     * @param string|VillageInterface|null $village
     * @return mixed
     */
    public function setVillage($village);
}
