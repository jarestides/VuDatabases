<?php

$invalid='';

if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['description'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");

        $name=$_POST['name'];
        $description=$_POST['description'];

        $register_query = "INSERT INTO `rso` (`name`, `description`) VALUES ('$name', '$description')";

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
