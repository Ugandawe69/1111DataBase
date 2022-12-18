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

        //這裡疑似sql有問題
        if($action=="updata"){
            $change_name = $_POST["change_name"];
            $change_price = $_POST["price"];
            $sql="UPDATE meal name='".$change_name."', price='".$change_price."'
            WHERE name='".$name."'";
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