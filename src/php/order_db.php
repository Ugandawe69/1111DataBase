<?php
    //從cookie中拿到username
    session_start();
    $username = $_SESSION["username"];
    //儲存訂單也要用到username forignkey
    //要做錯誤處理
?>