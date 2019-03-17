<?php
declare(strict_types=1);

namespace Mo\Type;


class SplInt extends SplType
{
    const __default = 0;

    protected function strategy($value)
    {
        return intval($value);
    }
}
