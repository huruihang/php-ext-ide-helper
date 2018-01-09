<?php

namespace Swoole\Coroutine\MySQL;

class Statement
{
    public $affected_rows = 0;
    public $insert_id = 0;
    public $error = '';
    public $errno = 0;
    public function execute($params){}
    public function __destruct(){}
    public function __sleep(){}
    public function __wakeup(){}
}
