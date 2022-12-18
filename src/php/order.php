<?php
    //從cookie中拿到username
    session_start();
    $username = $_SESSION["username"];
    //先把有訂單的抓出來顯示
    $sql="SELECT * FROM `order` WHERE username='".$username."'";
    $result=mysqli_query($conn,$sql);

    $json = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $json[] = $row;
    }
    echo json_encode($json);//回傳跑出來的json
?>