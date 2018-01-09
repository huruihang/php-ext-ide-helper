<?php

namespace Swoole\Http2;

class Client extends \Swoole\Client
{
    const MSG_OOB = 1;
    const MSG_PEEK = 2;
    const MSG_DONTWAIT = 64;
    const MSG_WAITALL = 256;
    public $requestHeaders = null;
    public $cookies = null;
    public function setHeaders(){}
    public function setCookies(){}
    public function get(){}
    public function post(){}
    public function onConnect(){}
    public function onError(){}
    public function onReceive(){}
    public function onClose(){}
    public function openStream(){}
    public function push(){}
    public function closeStream(){}
}
