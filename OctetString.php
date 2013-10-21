<?php

namespace LibASN1;

abstract class OctetString implements Type
{
    public function getNumber()
    {
        return 4;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }

    abstract public function isConstructed();

    abstract public function hasMore();
    abstract public function getChunk();
}
