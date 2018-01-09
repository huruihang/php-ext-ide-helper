<?php

namespace Swoole;

class Timer
{
    public static function tick($ms, $callback, $param = null){}
    public static function after($ms, $callback){}
    public static function exists($timer_id){}
    public static function clear($timer_id){}
}
