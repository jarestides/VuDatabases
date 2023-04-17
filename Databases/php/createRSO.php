<?php

$invalid='';

//$inData = getRequestInfo();

//$user_id = $_POST['user_id'];
//$name = $_POST['name'];
//$Description = $_POST['Description'];
//$univprofile_univ_id=$_POST['univprofile_univ_id'];

if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['Description']) || empty($_POST['univprofile_univ_id'])){
        $invalid ="Must fill the areas completely";
    }
    else
    {
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "vutabase");
        
        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $Description = $_POST['Description'];
        $univprofile_univ_id=$_POST['univprofile_univ_id'];
        
        $query = mysqli_query($conn, "INSERT INTO rso (name, Description, users_user_id, univprofile_univ_id) VALUES ('$name', '$Description', '$user_id', '$univprofile_univ_id')");

        $rows = mysqli_num_rows($query);
        
        $result = $query->get_result();
        $row = $result->fetch_assoc();
        $user_type = 2;

        if($rows == 1){
            $query2 = mysqli_query($conn, "UPDATE users SET user_type='$user_type' WHERE user_id='$user_id'");
            returnWithInfo($row['name']);
        }else{
            echo("Invalid");
        }
    }
}

//function getRequestInfo()
//{
//    return json_decode(file_get_contents('php://input'), true);
//}

function returnWithInfo( $name )
{
    $retValue = '{"name":' . $name . '","error":""}';
    sendResultInfoAsJson( $retValue );
}

function sendResultInfoAsJson( $obj )
{
    header('Content-type: application/json');
	echo $obj;
}

?>