<?php

namespace Swoole\Http;

class Client
{
    public $type = 0;
    public $errCode = 0;
    public $sock = 0;
    public $statusCode = 0;
    public $host = null;
    public $port = 0;
    public $requestMethod = null;
    public $requestHeaders = null;
    public $requestBody = null;
    public $uploadFiles = null;
    public $set_cookie_headers = null;
    public $downloadFile = null;
    public $headers = null;
    public $cookies = null;
    public $body = null;
    public $onConnect = null;
    public $onError = null;
    public $onMessage = null;
    public $onClose = null;
    public function __construct($host, $port = null, $ssl = null){}
    public function __destruct(){}
    public function set(array $settings){}
    public function setMethod($method){}
    public function setHeaders(array $headers){}
    public function setCookies(array $cookies){}
    public function setData($data){}
    public function addFile($path, $name, $type = null, $filename = null, $offset = null, $length = null){}
    public function execute($path, $callback){}
    public function push($data, $opcode = null, $finish = null){}
    public function get($path, $callback){}
    public function post($path, $data, $callback){}
    public function upgrade($path, $callback){}
    public function download($path, $file, $callback, $offset = null){}
    public function isConnected(){}
    public function close(){}
    public function on($event_name, $callback){}
}
