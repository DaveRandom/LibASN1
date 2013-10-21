<?php

namespace LibASN1;

class Real extends PrimitiveType
{
    private $value = 0;

    public function __construct($value = 0)
    {
        $this->value = (float) $value;
    }

    public function getNumber()
    {
        return 9;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = (bool) $value;
    }
}
