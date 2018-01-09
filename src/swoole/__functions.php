<?php

function swoole_version(){}
function swoole_cpu_num(){}
function swoole_last_error(){}
function swoole_event_add($fd, $read_callback, $write_callback = null, $events = null){}
function swoole_event_set($fd, $read_callback = null, $write_callback = null, $events = null){}
function swoole_event_del($fd){}
function swoole_event_exit(){}
function swoole_event_wait(){}
function swoole_event_write($fd, $data){}
function swoole_event_defer($callback){}
function swoole_event_cycle($callback){}
function swoole_timer_after($ms, $callback, $param = null){}
function swoole_timer_tick($ms, $callback){}
function swoole_timer_exists($timer_id){}
function swoole_timer_clear($timer_id){}
function swoole_async_set(array $settings){}
function swoole_async_read($filename, $callback, $chunk_size = null, $offset = null){}
function swoole_async_write($filename, $content, $offset = null, $callback = null){}
function swoole_async_readfile($filename, $callback){}
function swoole_async_writefile($filename, $content, $callback = null, $flags = null){}
function swoole_async_dns_lookup($hostname, $callback){}
function swoole_async_dns_lookup_coro($domain_name){}
function swoole_client_select(&$read_array, &$write_array, &$error_array, $timeout = null){}
function swoole_select(&$read_array, &$write_array, &$error_array, $timeout = null){}
function swoole_set_process_name($process_name){}
function swoole_get_local_ip(){}
function swoole_get_local_mac(){}
function swoole_strerror($errno){}
function swoole_errno(){}
