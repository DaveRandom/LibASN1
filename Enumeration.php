<?php

namespace LibBER;

class Enumeration extends PrimitiveType
{
    private $value = 0;

    public function __construct($value = 0)
    {
        $this->value = (int) $value;
    }

    public function getNumber()
    {
        return 10;
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
        $this->value = (int) $value;
    }
}
