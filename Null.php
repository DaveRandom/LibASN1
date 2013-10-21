<?php

namespace LibASN1;

class Null extends PrimitiveType
{
    public function getNumber()
    {
        return 5;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }

    public function getValue()
    {
        return null;
    }

    public function setValue($value) {}
}
