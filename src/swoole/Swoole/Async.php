<?php

namespace Swoole;

class Async
{
    public static function read($filename, $callback, $chunk_size = null, $offset = null){}
    public static function write($filename, $content, $offset = null, $callback = null){}
    public static function readFile($filename, $callback){}
    public static function writeFile($filename, $content, $callback = null, $flags = null){}
    public static function dnsLookup($hostname, $callback){}
    public static function dnsLookupCoro($domain_name){}
    public static function set(array $settings){}
    public static function exec($command, $callback){}
}
