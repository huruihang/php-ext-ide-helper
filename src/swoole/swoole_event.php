<?php

namespace Swoole;

class Event
{
    public static function add($fd, $read_callback, $write_callback = null, $events = null){}
    public static function del($fd){}
    public static function set($fd, $read_callback = null, $write_callback = null, $events = null){}
    public static function exit(){}
    public static function write($fd, $data){}
    public static function wait(){}
    public static function defer($callback){}
    public static function cycle($callback){}
}
