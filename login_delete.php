<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php 
deleteData();
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>

    <body>
       <div class="starter-template">
        <h1 class = "text-center">DELETE</h1>
      </div>

        <div class="container">
            <div class="col-xs-6">
                <form action="login_delete.php" method="post">                
                    <div class="form-group">
                       <label for="id">Select id to delete</label>
                        <select name="id" id="">
                            <?php
                                pullAllIds();
                             ?>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="DELETE">

                </form>

            </div>


        </div>

    </body>

    </html>