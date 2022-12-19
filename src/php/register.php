<?php 


    //大問題 : 英文不能存


    $conn=require_once("config.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
        //檢查帳號是否重複
        $check="SELECT * FROM user WHERE username='".$username."'";

        //如果行數等於0
        if(mysqli_num_rows(mysqli_query($conn,$check))==0){
            $sql="INSERT INTO user ( username, password)
                VALUES('".$username."','".$password."')";
            
            if(mysqli_query($conn, $sql)){
                echo "success";
                exit;
            }else{
                echo "mysql error";
            }
        }
        else{
            echo "fail";//該帳號有人使用
            exit;
        }
    }
    mysqli_close($conn);
?>