<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['user_id']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['user_type']) || empty($_POST['univprofile_univ_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");

        $user_id=$_POST['user_id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $user_type=$_POST['user_type'];
        $univprofile_univ_id=$_POST['univprofile_univ_id'];

        $register_query = "INSERT INTO `users` (`user_id`, `fname`, `lname`, `password`, `email`, `user_type`, `univprofile_univ_id`) VALUES ('$user_id', '$fname', '$lname', '$password', '$email', '$user_type', '$univprofile_univ_id')";

    try{
        $register_result = mysqli_query($conn, $register_query);
    if($register_query){
            if(mysqli_affected_rows($conn)>0){
                header("Location: loginPage.php");
            }else{
                echo("Invalid");
            }
        }
    }catch(Exception $ex){
            echo("error".$ex->getMessage());
        }
    }

}

?>