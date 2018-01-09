<?php

namespace Swoole\Http;

class Request
{
    public $fd = 0;
    public $header = null;
    public $server = null;
    public $request = null;
    public $cookie = null;
    public $get = null;
    public $files = null;
    public $post = null;
    public $tmpfiles = null;
    public function rawcontent(){}
    public function __sleep(){}
    public function __wakeup(){}
    public function __destruct(){}
}
