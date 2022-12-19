<?php
    //從cookie中拿到username
    $conn=require_once("config.php");
    $username = $_COOKIE["username"];
    //先把有訂單的抓出來顯示
    $sql="SELECT * FROM `order` WHERE username='".$username."'";
    $result=mysqli_query($conn,$sql);

    $json = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $json[] = $row;
    }
    echo json_encode($json);//回傳跑出來的json

    mysqli_close($conn);
?>