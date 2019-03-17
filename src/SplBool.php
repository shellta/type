<?php
declare(strict_types=1);

namespace Mo\Type;


class SplBool extends SplEnum
{
    const __default = false;

    const true      = true;

    const false     = false;

    protected function strategy($value)
    {
        return boolval($value);
    }
}
