<?php 
   $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "Connected to DB.";
    } else {
        die("Failed".mysqli_error($connection));
    }
?>