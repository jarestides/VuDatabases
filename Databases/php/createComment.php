<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['messages']) || empty($_POST['users_user_id']) || empty($_POST['events_Event_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");
        
        $messages = $_POST['messages'];
        $users_user_id = $_POST['users_user_id'];
        $events_Event_id = $_POST['events_Event_id'];
        
        $query = mysqli_query($conn, "INSERT INTO `comments` (`messages`, `users_user_id`, `events_Event_id`) VALUES ('$messages', '$users_user_id', '$events_Event_id')");
        
 

        header("Location: login-access.php");

        mysqli_close($conn);
    }
}
?>