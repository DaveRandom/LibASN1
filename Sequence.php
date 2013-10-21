<?php

namespace LibASN1;

class Sequence extends Collection
{
    public function getNumber()
    {
        return 16;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }
}
