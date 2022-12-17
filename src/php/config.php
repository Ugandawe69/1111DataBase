<?php
/* Attempt to connect to MySQL database */
$link = new mysqli('mysql_db','root','root','homework');
// 輸入中文也OK的編碼
mysqli_query($link, 'SET NAMES utf8');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    return $link;
}
?>