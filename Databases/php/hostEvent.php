<?php

$invalid='';

$inData = getRequestInfo();
    
$id = $inData["id"];
$user_lvl = $inData["user_type"];
$name=$inData['name'];
$category=$inData['category'];
$description=$inData['description'];
$time=$inData['time'];
$date=$inData['date'];
$location=$inData['location'];
$phone=$inData['phone'];
$email=$inData['email'];

if(isset($_POST['submit'])){
    if(empty($name) || empty($category) || empty($description) || empty($time) || empty($date) || empty($location) || empty($phone) || empty($email) || $user_lvl != 2){
        $invalid = "Must fill the areas completely";
    }
    else
    {

        $conn = mysqli_connect("localhost", "root", "");
        
        $db = mysqli_select_db($conn, "vutabase");

        $query = mysqli_query($conn, "INSERT INTO `events` (`name`, `category`, `description`, `time`, `date`, `location`, `phone`, `email`) VALUES ('$name', '$category', '$description', '$time', '$date', '$location', '$phone', '$email')");

        $rows = mysqli_num_rows($query);

        if($rows == 1){
            returnWithInfo($row['name']);
        }
        else
        {
            $invalid = "Incorrect";
        }
        mysqli_close($conn);
    }
}

function getRequestInfo()
{
    return json_decode(file_get_contents('php://input'), true);
}

function returnWithInfo( $name, $firstName, $lastName )
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