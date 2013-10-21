<?php

namespace LibASN1;

abstract class ConstructedType implements Type
{
    final public function isConstructed()
    {
        return true;
    }

    abstract public function getNumber();
    abstract public function getClass();
}
