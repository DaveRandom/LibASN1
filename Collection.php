<?php

namespace LibASN1;

abstract class Collection implements Type, \IteratorAggregate, \ArrayAccess, \Countable
{
    protected $components = [];

    final public function isConstructed()
    {
        return true;
    }
    abstract public function getNumber();
    abstract public function getClass();

    final public function getIterator()
    {
        return new \ArrayIterator($this->components);
    }

    abstract public function offsetExists($index);
    abstract public function offsetGet($index);
    abstract public function offsetSet($index, $value);
    abstract public function offsetUnset($index);

    final public function count()
    {
        return count($this->components);
    }
}
