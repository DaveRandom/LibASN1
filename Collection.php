<?php

namespace LibASN1;

abstract class Collection extends ConstructedType implements \IteratorAggregate, \ArrayAccess, \Countable
{
    private $components = [];

    protected function getItem($index)
    {
        if (!isset($this->components[$index])) {
            throw new \OutOfRangeException("Invalid index '$index'");
        }

        return $this->components[$index];
    }

    protected function setItem($index, Type $value)
    {
        $this->components[$index] = $value;
    }

    final public function getIterator()
    {
        return new \ArrayIterator($this->components);
    }

    final public function offsetExists($index)
    {
        return isset($this->components[$index]);
    }

    final public function offsetGet($index)
    {
        return $this->getItem($index);
    }

    final public function offsetSet($index, $value)
    {
        $this->setItem($index, $value);
    }

    final public function offsetUnset($index)
    {
        unset($this->components[$index]);
    }

    final public function count()
    {
        return count($this->components);
    }
}
