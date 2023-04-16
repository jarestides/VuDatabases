<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['Description']) || empty($_POST['univprofile_univ_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");

        $name=$_POST['name'];
        $Description=$_POST['Description'];
        $univprofile_univ_id=$_POST['univprofile_univ_id'];

        $register_query = "INSERT INTO `rso` (`name`, `Description`, `univprofile_univ_id`) VALUES ('$name', '$Description','$univprofile_univ_id')";

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