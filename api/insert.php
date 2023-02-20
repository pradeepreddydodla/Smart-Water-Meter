<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$servername = "localhost";
$username = "someuser";
$password = "somepassword";
$dbname = "someDB";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['cid']) && isset($_GET['data'])) 
{
 
    $cid = $_GET['cid'];
    $data = $_GET['data'];
 
   

    $sql= "INSERT INTO customer(cid,data) VALUES('$cid','$data')";
   
 
    
    $result = mysqli_query($conn,$sql);
 
    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Values successfully inserted.";
 
        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";
 
        // Show JSON response
        echo json_encode($response);
    }
}
 else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    // Show JSON response
    echo json_encode($response);
}
?>