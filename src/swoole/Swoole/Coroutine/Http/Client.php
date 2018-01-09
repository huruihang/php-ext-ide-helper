<?php

namespace Swoole\Coroutine\Http;

class Client
{
    public $type = 0;
    public $errCode = 0;
    public $statusCode = 0;
    public $host = null;
    public $port = 0;
    public $requestMethod = null;
    public $requestHeaders = null;
    public $requestBody = null;
    public $uploadFiles = null;
    public $headers = null;
    public $cookies = null;
    public $body = null;
    public function __construct(){}
    public function __destruct(){}
    public function set(){}
    public function setMethod(){}
    public function setHeaders(){}
    public function setCookies(){}
    public function setData(){}
    public function execute(){}
    public function get(){}
    public function post(){}
    public function addFile(){}
    public function isConnected(){}
    public function close(){}
    public function setDefer(){}
    public function getDefer(){}
    public function recv(){}
    public function __sleep(){}
    public function __wakeup(){}
}
