<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['users_user_id']) || empty($_POST['rso_RSO_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");
        
        $users_user_id = $_POST['users_user_id'];
        $rso_RSO_id = $_POST['rso_RSO_id'];
        
        $query = mysqli_query($conn, "DELETE FROM rso_members WHERE users_user_id='$users_user_id' AND rso_RSO_id='$rso_RSO_id'");

        $rows = mysqli_num_rows($query);
        
//        $result = mysqli_result($query);
//        $row = mysqli_fetch_fields($query);
//        $user_type = 2;

//        if($rows == 1){
            //$query2 = mysqli_query($conn, "UPDATE users SET user_type='$user_type' WHERE user_id='$users_user_id'");
            //returnWithInfo($row['name']);
        header("Location: login-access.php");
//        }else{
//            echo("Invalid");
//        }
        mysqli_close($conn);
    }
}

?>