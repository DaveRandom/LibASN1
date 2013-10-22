<?php

namespace LibASN1;

class Null implements Type
{
    final public function isConstructed()
    {
        return false;
    }

    public function getNumber()
    {
        return 5;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }
}
