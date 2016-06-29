<?php
include "db.php";
if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('QUERY FAILED'.mysqli_error($connection));
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="col-xs-6">
       <form action="login_create.php" method="post">
          <div class="form-group">
             <label for="username">Username</label>
              <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
             <label for="password">Password</label>
              <input type="password" class="form-control" name="password">
          </div>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
           
       </form>
        
    </div>
    
    
</div>

</body>

</html>