<?php
    $conn=require_once "config.php";
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    //增加hash可以提高安全性
    $password_hash=password_hash($password,PASSWORD_DEFAULT);


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT * FROM user WHERE username ='".$username."'";
        $result=mysqli_query($conn,$sql);

        $tmp = mysqli_fetch_assoc($result);
        
        #如果有找到
        if(mysqli_num_rows($result)==1 && $tmp["password"]){
            //儲存進session裡
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] =$tmp["username"];

            echo $_SESSION["loggedin"];
            echo $_SESSION["username"];
            exit;
        }
        echo "fail";
        exit;
    }
       
    mysqli_close($conn);

    ?>
?>