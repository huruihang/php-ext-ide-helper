<?php

namespace Swoole\Server;

class Port
{
    public $onConnect = null;
    public $onReceive = null;
    public $onClose = null;
    public $onPacket = null;
    public $onBufferFull = null;
    public $onBufferEmpty = null;
    public $onRequest = null;
    public $onHandShake = null;
    public $onMessage = null;
    public $onOpen = null;
    public $host = null;
    public $port = 0;
    public $type = 0;
    public $sock = 0;
    public $setting = null;
    public $connections = null;
    private function __construct(){}
    public function __destruct(){}
    public function set(array $settings){}
    public function on($event_name, $callback){}
    public function __sleep(){}
    public function __wakeup(){}
    public function getSocket(){}
}
