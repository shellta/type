<?php
declare(strict_types=1);

namespace Mo\Type;


class SplFloat extends SplType
{
    const __default = 0.0;

    protected function strategy($value)
    {
        return floatval($value);
    }
}
