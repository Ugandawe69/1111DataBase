<?php
    //從cookie中拿到username
    $conn=require_once("config.php");
    $username =$_COOKIE["username"];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //get meal 全菜單
        $sql ="SELECT * FROM meal";
        $result=mysqli_query($conn,$sql);

        //抓meal每一層
        while($n =mysqli_fetch_assoc($result))
        {
            //每一層的name
            $t=$n["name"];
            //如果有相同的鳴子 而且數字大於0
            if($_POST[$t]>0){
                $p=$n["price"]*$_POST[$t];
                $increase = "INSERT INTO `order`(`username`, `product`, `price`) VALUES ('".$username."','".$t."','".$p."')";
                mysqli_query($conn,$increase);
            }
        }
    }
    mysqli_close($conn);
?>