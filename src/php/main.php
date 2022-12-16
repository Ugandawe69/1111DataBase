<?php
    $json=array();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        // 換成php://input 
        $inputJson = file_get_contents('php://input');
        if(!empty(json_decode($inputJson))){
            //......
        }else{
            $json = array("status" => 1, "msg" => "inputJson is empty");
        }
    }
?>