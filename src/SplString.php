<?php
declare(strict_types=1);

namespace Mo\Type;


class SplString extends SplType
{
    const __default = '';

    protected function strategy($value)
    {
        return strval($value);
    }
}
