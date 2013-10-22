<?php

namespace LibASN1;

class Enumeration extends Integer
{
    abstract protected function validateValue($value);

    public function getNumber()
    {
        return 10;
    }

    public function setValue($value)
    {
        $this->validateValue($value);
        $this->_value = (int) $value;
    }
}
