<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "accessform");

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];

        $register_query = "INSERT INTO `form` (`fname`, `lname`, `username`, `password`, `email`) VALUES ('$fname', '$lname', '$username', '$password', '$email')";

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