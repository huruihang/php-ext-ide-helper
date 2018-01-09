<?php

namespace Swoole\Http;

class Server extends \Swoole\Server
{
    public $onRequest = null;
    public $onHandshake = null;
}
