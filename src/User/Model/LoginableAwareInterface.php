<?php

declare(strict_types=1);

namespace Inisiatif\Package\Contract\User\Model;

interface LoginableAwareInterface
{
    public const TYPE_AGENT = 'AGENT';

    public const TYPE_EMPLOYEE = 'EMPLOYEE';

    public const TYPE_VOLUNTEER = 'VOLUNTEER';

    public function getLoginable();

    /**
     * @param mixed $value
     * @return mixed
     */
    public function setLoginable($value);

    public function getLoginableType(): string;

    /**
     * @return mixed
     */
    public function setLoginableType(string $value);
}
