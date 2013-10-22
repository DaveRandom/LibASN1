<?php

namespace LibASN1;

class Boolean implements ValuedType
{
    protected $_value = false;

    public function __construct($value = false)
    {
        $this->_value = (bool) $value;
    }

    final public function isConstructed()
    {
        return false;
    }

    public function getNumber()
    {
        return 1;
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
        $this->_value = (bool) $value;
    }
}
