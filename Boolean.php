<?php

namespace LibASN1;

class Boolean extends PrimitiveType
{
    private $value = false;

    public function __construct($value = false)
    {
        $this->value = (bool) $value;
    }

    public function getNumber()
    {
        return 1;
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
