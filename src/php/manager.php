<?php
    //從mysql包成json給前端
    $conn=require_once("config.php");
    $json = array();
    $sql ="SELECT * FROM meal";
    $result=mysqli_query($conn,$sql);
    while($row =mysqli_fetch_assoc($result))
    {
        $json[] = $row;
    }
    echo json_encode($json);
?>