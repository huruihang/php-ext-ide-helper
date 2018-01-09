<?php

namespace Swoole\Coroutine;

class Client
{
    const MSG_OOB = 1;
    const MSG_PEEK = 2;
    const MSG_DONTWAIT = 64;
    const MSG_WAITALL = 256;
    public $errCode = 0;
    public $sock = 0;
    public $type = 0;
    public $setting = null;
    public function __construct($type){}
    public function __destruct(){}
    public function set(array $settings){}
    public function connect($host, $port = null, $timeout = null){}
    public function recv(){}
    public function send($data, $flag = null){}
    public function sendfile($filename, $offset = null, $length = null){}
    public function sendto($ip, $port, $data){}
    public function enableSSL(){}
    public function getPeerCert(){}
    public function verifyPeerCert(){}
    public function isConnected(){}
    public function getsockname(){}
    public function getpeername(){}
    public function close(){}
    public function __sleep(){}
    public function __wakeup(){}
    public function getSocket(){}
}
