<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $invalid = "Incorrect";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $conn = mysqli_connect("localhost", "root", "");
        
        $db = mysqli_select_db($conn, "vutabase");

        $query = mysqli_query($conn, "SELECT * FROM users WHERE password='$password' AND username='$username'");

        $rows = mysqli_num_rows($query);

        if($rows == 1){
            header("Location: login-access.php");
        }
        else
        {
            $invalid = "Incorrect";
        }
        mysqli_close($conn);
    }
}
?>
