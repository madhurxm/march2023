<?php 
require('config.php');
if($conn){
    $row = "SELECT * FROM `user_info`;";
    $query = mysqli_query($conn, $row);
    if(mysqli_query($conn, $row)){
        echo("<PRE>");
        print_r(mysqli_fetch_assoc($query));
        echo("</PRE>");
    }
}
?>