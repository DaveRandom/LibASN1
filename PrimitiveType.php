<?php

namespace LibASN1;

abstract class PrimitiveType implements Type
{
    final public function isConstructed()
    {
        return false;
    }

    abstract public function getNumber();
    abstract public function getClass();

    abstract public function getValue();
    abstract public function setValue($value);
}
