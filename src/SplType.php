<?php
declare(strict_types=1);

namespace Mo\Type;


abstract class SplType implements SplTypeInterface
{
    const __default = null;

    protected $val;

    public function __construct($value = self::__default)
    {
        $this->val = $this->strategy($value);
    }

    abstract protected function strategy($value);

    public function value()
    {
        return $this->val;
    }
}
