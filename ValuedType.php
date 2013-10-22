<?php

namespace LibASN1;

interface ValuedType extends Type
{
    public function getValue();
    public function setValue($value);
}
