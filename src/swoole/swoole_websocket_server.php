<?php

namespace Swoole\WebSocket;

class Server extends \Swoole\Http\Server
{
    public function push($fd, $data, $opcode = null, $finish = null){}
    public static function pack($data, $opcode = null, $finish = null, $mask = null){}
    public static function unpack($data){}
}
