<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['user_id']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['univ_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $user_id=$_POST['user_id'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $univ_id=$_POST['univ_id'];

        $register_query = "INSERT INTO `users` (`fname`, `lname`, `user_id`, `password`, `email`, `univ_id`) VALUES ('$fname', '$lname', '$user_id', '$password', '$email', '$univ_id')";

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
