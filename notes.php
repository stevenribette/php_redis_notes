<?php
    header("Access-Control-Allow-Origin: *");
    require('redis.php');
    $data=null;
    if(isset($_GET['notes'])){
        $request = 'get_notes';
        $data = getAllKey();
    }else if(isset($_POST['notes'])){
        $request = 'post_note';
        $p = json_decode($_POST['notes']);
        $data = setKey($p->key,$p->value);
    }else if(isset($_GET['note'])){
        $request = 'note by id';
        $p = json_decode($_GET['note']);
        $data = getKey($p->key);
    }else{
        $data = "ERROR";
    }
    $toRet = array(
        "data" => $data,
        "request" => $request
    );
    echo json_encode($toRet);
?>