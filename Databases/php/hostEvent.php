<?php

$invalid='';

//$inData = getRequestInfo();

//$user_id = $_POST['user_id'];
//$name = $_POST['name'];
//$Description = $_POST['Description'];
//$univprofile_univ_id=$_POST['univprofile_univ_id'];

if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['category']) || empty($_POST['description']) || empty($_POST['time']) || empty($_POST['date']) || empty($_POST['location']) || empty($_POST['phone']) || empty($_POST['email'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");
        
        $users_user_id = $_POST["users_user_id"];
        $rso_RSO_id = $_POST["rso_RSO_id"];
        $name=$_POST['name'];
        $category=$_POST['category'];
        $description=$_POST['description'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $location=$_POST['location'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        
        $query = mysqli_query($conn, "INSERT INTO `events` (`name`, `category`, `description`, `time`, `date`, `location`, `phone`, `email`) VALUES ('$name', '$category', '$description', '$time', '$date', '$location', '$phone', '$email')");

        //$rows = mysqli_num_rows($query);
        
        
//        $result = mysqli_result($query);
//        $row = mysqli_fetch_fields($query);
//        $user_type = 2;

       // if($rows == 1){
//            $query2 = mysqli_query($conn, "UPDATE users SET user_type='$user_type' WHERE user_id='$users_user_id'");
//            returnWithInfo($row['name']);
        header("Location: login-access.php");
//        }else{
//            echo("Invalid");
//        }
        mysqli_close($conn);
    }
}
?>