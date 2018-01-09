<?php

namespace Swoole\Connection;

class Iterator implements \Iterator, \Countable, \ArrayAccess
{
    public function rewind(){}
    public function next(){}
    public function current(){}
    public function key(){}
    public function valid(){}
    public function count(){}
    public function offsetExists($fd){}
    public function offsetGet($fd){}
    public function offsetSet($fd, $value){}
    public function offsetUnset($fd){}
}
