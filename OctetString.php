<?php

namespace LibASN1;

class OctetString implements ConstructableType
{
    protected $_value = '';
    protected $_pointer = 0;

    public function __construct($value)
    {
        $this->_value = (string) $value;
    }

    public function isConstructed()
    {
        return false;
    }

    public function getNumber()
    {
        return 4;
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
        $this->_value = (string) $value;
    }

    public function hasMore()
    {
        return $this->pointer < strlen($this->_value);
    }

    public function getChunk()
    {
        $result = substr($this->_value, $this->pointer);
        $this->pointer = strlen($this->_value);

        return $result;
    }
}
