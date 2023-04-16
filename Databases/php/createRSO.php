<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['Name']) || empty($_POST['Description'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");

        $Name=$_POST['Name'];
        $Description=$_POST['Description'];

        $register_query = "INSERT INTO `rso` (`Name`, `Description`) VALUES ('$Name', '$Description')";

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