<?php

namespace Swoole;

class Buffer
{
    public function __construct($size = null){}
    public function __destruct(){}
    public function __toString(){return "";}
    public function substr($offset, $length = null, $seek = null){}
    public function write($offset, $data){}
    public function read($offset, $length){}
    public function append($data){}
    public function expand($size){}
    public function recycle(){}
    public function clear(){}
    public function __sleep(){}
    public function __wakeup(){}
}
