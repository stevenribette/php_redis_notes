<?php

    $redis = new Redis();
    
    function connect(){
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
            $toRet = "connected!";
        }else{
            $toRet = "connection failure!";
        }
        return $toRet;
    }

    function getAllKey(){
        try{
            $toRet = $redis->keys('*');
            return $toRet;
        }catch(Exception $e){
            print_r($e);
        }
    }
    function getCountAllKey(){
        try{
            $toRet = $redis->dbSize();
            return $toRet;
        }catch(Exception $e){
            print_r($e);
        }
    }
    function getKey($key){
        try{
            $toRet = $redis->get($key);
            return $toRet;
        }catch(Exception $e){
            print_r($e);
        }
    }
    function setKey($key,$value){
        try{
            $toRet = $redis->set($key, $value);
            return $toRet;
        }catch(Exception $e){
            print_r($e);
        }
    }
    function delKey($key){
        try{
            $toRet = $redis->delete($key);
            return $toRet;
        }catch(Exception $e){
            print_r($e);
        }
    }
    function close(){
        try{
            $toRet = $redis->close();
            return $toRet;
        }catch(Exception $e){
            print_r($e);
        }
    }
?>