<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['users_user_id']) || empty($_POST['comments_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");
        
        $users_user_id = $_POST['users_user_id'];
        $comments_id = $_POST['comments_id'];
        
        $query = mysqli_query($conn, "DELETE FROM comments WHERE comments_id='$comments_id' AND users_user_id='$users_user_id'");
        
 

        header("Location: login-access.php");

        mysqli_close($conn);
    }
}
?>