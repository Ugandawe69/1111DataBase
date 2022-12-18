<?php
    $conn=require_once("config.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $action=$_POST["act"];
        $name = $_POST["name"];

        //新增還少key不能同值
        //maybe 菜名 primary key
        if($action=="add"){
            $price = $_POST["price"];
            $sql="INSERT INTO meal ( name, price)
                VALUES('".$name."','".$price."')";
        }

        if($action=="delete"){
            $sql="DELETE FROM meal WHERE name='".$name."'";
        }

        if($action==""){
            //減去資料庫裡的東西
            $sql="DELETE FROM meal WHERE name='".$name."'";
        }

        if(mysqli_query($conn, $sql)){
            echo "success";
            exit;
        }else{
            echo "mysql error";
            exit;
        }
    }
?>