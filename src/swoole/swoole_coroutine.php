<?php

namespace Swoole;

class Coroutine
{
    public static function create($func){}
    public static function cli_wait(){}
    public static function suspend($uid){}
    public static function resume($uid){}
    public static function getuid(){}
    public static function sleep($seconds){}
    public static function fread($handle, $length = null){}
    public static function fwrite($handle, $string, $length = null){}
    public static function gethostbyname($domain_name, $family = null){}
    public static function call_user_func($func){}
    public static function call_user_func_array($func, array $params){}
}
