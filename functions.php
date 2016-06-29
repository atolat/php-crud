<?php include "db.php"; ?>

<?php
    function pullAllIds(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('QUERY FAILED'.mysqli_error($connection));
        }
    
        while($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              echo "<option value='$id'>$id</option>";
        }
    }


    function updateData(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];
            $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
            $result = mysqli_query($connection,$query);
        if(!$result){
            die('QUERY FAILED.'.mysqli_error($connection));
        }
        }
    }

    function createData(){
        global $connection;
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = mysqli_real_escape_string($connection,$username);
            $password = mysqli_real_escape_string($connection,$password);
            $hashFormat = "$2y$10$";
            $salt = "iusesomecrazystrings22";
            $hashFormat_and_salt = $hashFormat.$salt;
            $password = crypt($password,$hashFormat_and_salt);
            $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
            $result = mysqli_query($connection,$query);
        if(!$result){
            die('QUERY FAILED'.mysqli_error($connection));
        }
        }
    }
    
    function deleteData(){
        if(isset($_POST['submit'])){
            global $connection;
            $id = $_POST['id'];
            $query = "DELETE FROM users where id = $id";
            $result = mysqli_query($connection,$query);
        if(!$result){
            die('QUERY FAILED.'.mysqli_error($connection));
        }
        }
    }
    
    
    

?>