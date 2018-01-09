<?php

namespace Swoole\Redis;

class Server extends \Swoole\Server
{
    const NIL = 1;
    const ERROR = 0;
    const STATUS = 2;
    const INT = 3;
    const STRING = 4;
    const SET = 5;
    const MAP = 6;
    public function setHandler($command, $callback, $number_of_string_param = null, $type_of_array_param = null){}
    public static function format($type, $value = null){}
}
