<?php

namespace LibASN1;

class Set extends Collection
{
    public function getNumber()
    {
        return 17;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }
}
