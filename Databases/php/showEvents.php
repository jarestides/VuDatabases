<?php

$invalid='';


if(isset($_POST['submit'])){
    
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];

    $conn = new mysqli_connect("localhost", "root", "");

    $db = mysqli_select_db($conn, "vutabase");

    $stmt = $conn->prepare("SELECT * FROM events");
    $stmt->execute();

    $result = $stmt->get_result();

    while($row = $result->fetch_assoc())
    {
        if( $searchCount > 0 )
        {
            $searchResults .= ",";
        }
        $searchCount++;
        $searchResults .= '{"Event_id" : "' . $row["Event_id"] . '", "name" : "' . $row["name"] . '", "description" : "' . $row["description"] . '", "phone" : "' . $row["phone"] . '", "email" : "' . $row["email"] . '", "time" : "' . $row["time"] . '", "date" : "' . $row["date"] . '", "location" : "' . $row["location"] . '", "category" : "' . $row["category"] . '", "univprofile_univ_id" : "' . $row["univprofile_univ_id"] . '"}';
    }
    if( $searchCount == 0 )
    {
        returnWithError( "No Records Found" );
    }
    else
    {
        returnWithInfo( $searchResults );
    }
    //$result = $query->get_result();
    //$row = $result->fetch_assoc();

//        if($rows == 1){
//        header("Location: login-access.php");
//            //returnWithInfo($row['user_id'], $row['fname'], $row['lname']);
//        }
//        else
//        {
//            $invalid = "Incorrect";
//        }
    mysqli_close($conn);
    
}

function sendResultInfoAsJson( $obj )
{
    header('Content-type: application/json');
    echo $obj;
}
function returnWithError( $err )
{
    $retValue = '{"id":0,"FirstName":"","LastName":"","error":"' . $err . '"}';
    sendResultInfoAsJson( $retValue );
}

function returnWithInfo( $searchResults )
{
    $retValue = '{"results":[' . $searchResults . '],"error":""}';
    sendResultInfoAsJson( $retValue );
}
?>