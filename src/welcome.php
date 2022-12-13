
<?php
//使用者成功後的畫面

session_start();  
$username=$_SESSION["username"];
echo "<h1>你好 ".$username."</h1>";
echo "<a href='logout.php'>登出</a>";
    
?>