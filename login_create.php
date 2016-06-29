<?php include "db.php";?>
<?php include "functions.php";?>
<?php createData() ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
<div class="starter-template">
        <h1 class = "text-center">CREATE</h1>
      </div>
<div class="container">
    <div class="col-sm-6">
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