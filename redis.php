<?php

    $redis = new Redis();
    
    $url = '172.17.0.2';
    //$url = '127.0.0.1';
    $port = 6379;
    $password = 'motdepasse';
    $db = 'notes';

    $redis->pconnect($url, $port);
    $redis->auth($password);
    $redis->select($db);
    $ping = $redis->ping();
    if($ping=='pong'){
        echo "connected!";
    }else{
        echo "connection failure!";
    }

    function getAllKey(){
        return $redis->keys('*');
    }
    function getCountAllKey(){
        return $redis->dbSize();
    }
    function getKey($key){
        return $redis->get($key);
    }
    function setKey($key,$value){
        return $redis->set($key, $value);
    }
    function delKey($key){
        return $redis->delete($key);
    }
    function close(){
        $redis->close();
    }
?>