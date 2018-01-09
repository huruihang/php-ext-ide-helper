<?php

namespace Swoole;

class Process
{
    const IPC_NOWAIT = 256;
    public $pipe = null;
    public $callback = null;
    public $msgQueueId = null;
    public $msgQueueKey = null;
    public $pid = null;
    public $id = null;
    public function __construct($callback, $redirect_stdin_and_stdout = null, $pipe_type = null){}
    public function __destruct(){}
    public static function wait($blocking = null){}
    public static function signal($signal_no, $callback){}
    public static function alarm($usec){}
    public static function kill($pid, $signal_no = null){}
    public static function daemon($nochdir = null, $noclose = null){}
    public static function setaffinity(array $cpu_settings){}
    public function setTimeout($seconds){}
    public function useQueue($key = null, $mode = null){}
    public function statQueue(){}
    public function freeQueue(){}
    public function start(){}
    public function write($data){}
    public function close(){}
    public function read($size = null){}
    public function push($data){}
    public function pop($size = null){}
    public function exit($exit_code = null){}
    public function exec($exec_file, $args){}
    public function name($process_name){}
}
