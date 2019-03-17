<?php
declare(strict_types=1);

namespace Mo\Type;


use Mo\Type\Exception\EnumException;

class SplEnum extends SplType
{
    const __default = null;

    public function getConstList(bool $includeDefault = false): array
    {
        $class = new \ReflectionClass($this);

        if ($includeDefault) {
            return $class->getConstants();
        }

        $constants = $class->getConstants();
        unset($constants['__default']);

        return $constants;
    }

    protected function strategy($value)
    {
        $constList = $this->getConstList();

        foreach ($constList as $k => $const) {
            if ($value === $const) {
                return $value;
            }
        }

        throw new EnumException("Enum value {$value} not exists.");
    }
}
