<?php
    $conn=require_once "config.php";
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    //增加hash可以提高安全性
    $password_hash=password_hash($password,PASSWORD_DEFAULT);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT * FROM user WHERE username ='".$username."'";
        $result=mysqli_query($conn,$sql);
        #如果有找到
        if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]){
            //儲存進session裡
            session_start();
            $_SESSION["loggedin"] = true;
            //$_SESSION["username"] = mysqli_fetch_assoc($result)["username"];

            echo "success";
            exit;
        }
        echo "fail";
        exit;
    }
       
    mysqli_close($conn);

    ?>
?>