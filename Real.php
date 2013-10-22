<?php

namespace LibASN1;

class Real implements ValuedType
{
    protected $_value = 0;

    public function __construct($value = 0)
    {
        $this->_value = (float) $value;
    }

    final public function isConstructed()
    {
        return false;
    }

    public function getNumber()
    {
        return 9;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function setValue($value)
    {
        $this->_value = (float) $value;
    }
}
