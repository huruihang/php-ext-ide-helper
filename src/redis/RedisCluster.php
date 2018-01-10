<?php

class RedisCluster
{
    const REDIS_NOT_FOUND = 0;
    const REDIS_STRING = 1;
    const REDIS_SET = 2;
    const REDIS_LIST = 3;
    const REDIS_ZSET = 4;
    const REDIS_HASH = 5;
    const ATOMIC = 0;
    const MULTI = 1;
    const OPT_SERIALIZER = 1;
    const OPT_PREFIX = 2;
    const OPT_READ_TIMEOUT = 3;
    const SERIALIZER_NONE = 0;
    const SERIALIZER_PHP = 1;
    const OPT_SCAN = 4;
    const SCAN_RETRY = 1;
    const SCAN_NORETRY = 0;
    const OPT_SLAVE_FAILOVER = 5;
    const FAILOVER_NONE = 0;
    const FAILOVER_ERROR = 1;
    const FAILOVER_DISTRIBUTE = 2;
    const FAILOVER_DISTRIBUTE_SLAVES = 3;
    const AFTER = 'after';
    const BEFORE = 'before';
    public function __construct(){}
    public function close(){}
    public function get(){}
    public function set(){}
    public function mGet(){}
    public function mSet(){}
    public function mSetNx(){}
    public function del(){}
    public function setEx(){}
    public function pSetEx(){}
    public function setNx(){}
    public function getSet(){}
    public function exists(){}
    public function keys(){}
    public function type(){}
    public function lPop(){}
    public function rPop(){}
    public function lSet(){}
    public function sPop(){}
    public function lPush(){}
    public function rPush(){}
    public function blPop(){}
    public function brPop(){}
    public function rPushX(){}
    public function lPushX(){}
    public function lInsert(){}
    public function lIndex(){}
    public function lRem(){}
    public function bRPopLPush(){}
    public function rPopLPush(){}
    public function lLen(){}
    public function sCard(){}
    public function sMembers(){}
    public function sIsMember(){}
    public function sAdd(){}
    public function sAddArray(){}
    public function sRem(){}
    public function sUnion(){}
    public function sUnionStore(){}
    public function sInter(){}
    public function sInterStore(){}
    public function sDiff(){}
    public function sDiffStore(){}
    public function sRandMember(){}
    public function strLen(){}
    public function persist(){}
    public function ttl(){}
    public function pttl(){}
    public function zCard(){}
    public function zCount(){}
    public function zRemRangeByScore(){}
    public function zScore(){}
    public function zAdd(){}
    public function zIncrBy(){}
    public function hLen(){}
    public function hKeys(){}
    public function hVals(){}
    public function hGet(){}
    public function hGetAll(){}
    public function hExists(){}
    public function hIncrBy(){}
    public function hSet(){}
    public function hSetNx(){}
    public function hMget(){}
    public function hMset(){}
    public function hDel(){}
    public function hIncrByFloat(){}
    public function hStrLen(){}
    public function dump(){}
    public function zRank(){}
    public function zRevRank(){}
    public function incr(){}
    public function decr(){}
    public function incrBy(){}
    public function decrBy(){}
    public function incrByFloat(){}
    public function expire(){}
    public function pexpire(){}
    public function expireAt(){}
    public function pexpireAt(){}
    public function append(){}
    public function getBit(){}
    public function setBit(){}
    public function bitOp(){}
    public function bitPos(){}
    public function bitCount(){}
    public function lGet(){}
    public function getRange(){}
    public function lTrim(){}
    public function lRange(){}
    public function zRemRangeByRank(){}
    public function publish(){}
    public function rename(){}
    public function renameNx(){}
    public function pfCount(){}
    public function pfAdd(){}
    public function pfMerge(){}
    public function setRange(){}
    public function restore(){}
    public function sMove(){}
    public function zRange(){}
    public function zRevRange(){}
    public function zRangeByScore(){}
    public function zRevRangeByScore(){}
    public function zRangeByLex(){}
    public function zRevRangeByLex(){}
    public function zLexCount(){}
    public function zRemRangeByLex(){}
    public function zUnionStore(){}
    public function zInterStore(){}
    public function zRem(){}
    public function sort(){}
    public function object(){}
    public function subscribe(){}
    public function pSubscribe(){}
    public function unsubscribe(){}
    public function pUnsubscribe(){}
    public function eval(){}
    public function evalSha(){}
    public function scan(&$i_iterator, $str_node, $str_pattern = null, $i_count = null){}
    public function sScan($str_key, &$i_iterator, $str_pattern = null, $i_count = null){}
    public function zScan($str_key, &$i_iterator, $str_pattern = null, $i_count = null){}
    public function hScan($str_key, &$i_iterator, $str_pattern = null, $i_count = null){}
    public function getMode(){}
    public function getLastError(){}
    public function clearLastError(){}
    public function getOption(){}
    public function setOption(){}
    public function _prefix(){}
    public function _serialize(){}
    public function _unserialize(){}
    public function _masters(){}
    public function _redir(){}
    public function multi(){}
    public function exec(){}
    public function discard(){}
    public function watch(){}
    public function unwatch(){}
    public function save(){}
    public function bgSave(){}
    public function flushDB(){}
    public function flushAll(){}
    public function dbSize(){}
    public function bgRewriteAOF(){}
    public function lastSave(){}
    public function info(){}
    public function role(){}
    public function time(){}
    public function randomKey(){}
    public function ping(){}
    public function echo(){}
    public function command(){}
    public function rawCommand(){}
    public function cluster(){}
    public function client(){}
    public function config(){}
    public function pubSub(){}
    public function script(){}
    public function slowLog(){}
    public function geoAdd(){}
    public function geoHash(){}
    public function geoPos(){}
    public function geoDist(){}
    public function geoRadius(){}
    public function geoRadiusByMember(){}
}
