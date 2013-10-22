<?php

namespace LibASN1;

abstract class Sequence extends Collection
{
    public function __construct()
    {
        $args = func_get_args();

        foreach ($this->components as $name => $component) {
            if ($args && null !== $arg = array_shift($args)) {
                $this->offsetSet($name, $arg);
            }
        }
    }

    public function getNumber()
    {
        return 16;
    }

    public function getClass()
    {
        return self::CLASS_UNIVERSAL;
    }

    final public function offsetExists($index)
    {
        return isset($this->components[$index]);
    }

    final public function offsetGet($index)
    {
        return call_user_func([$this, 'get' . $index]);
    }

    final public function offsetSet($index, $value)
    {
        call_user_func([$this, 'set' . $index], $value);
    }

    final public function offsetUnset($index)
    {
        if (isset($this->components[$index])) {
            $this->components[$index] = null;
        }
    }
}
