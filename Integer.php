<?php

namespace LibASN1;

class Integer implements ValuedType
{
    protected $_value = 0;

    public function __construct($value = 0)
    {
        $this->_value = (int) $value;
    }

    final public function isConstructed()
    {
        return false;
    }

    public function getNumber()
    {
        return 2;
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
        $this->_value = (int) $value;
    }
}
