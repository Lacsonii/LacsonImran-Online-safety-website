<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$host = "localhost";
$userID = "root";
$pass = "";
$dbname = "smc_limited";

// Create connection
$conn = new mysqli($host, $userID, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Retrieve form data
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Username = $_POST["Username"];
$Country = $_POST["Country"];
$EmailAddress = $_POST["EmailAddress"];
$IDtype  = isset($_POST["IDtype"]) ? $_POST["IDtype"] : ""; // Use isset() to check if the key exists
$IDNumber = $_POST["IDNumber"];
$UploadImage = $_POST["UploadImage"];
$Gender = $_POST["Gender"];
$DateOfBirth = $_POST["dateOfBirth"];
$password = $_POST["password"];

// Prepare and execute SQL query to insert into 'users' table
$userQuery = "INSERT INTO webusers VALUES ('$Username', '$password', 2)";
$retUsers = mysqli_query($conn, $userQuery);

// Prepare and execute SQL query to insert into 'details' table
if ($retUsers) {
    $detailsQuery = "INSERT INTO useraccount (FirstName,LastName, Username,Country,EmailAddress,IDtype,IDNumber,UploadImage, Gender, DateOfBirth) VALUES ('$FirstName', '$LastName', '$Username','$Country','$EmailAddress','$IDtype', '$IDNumber','$UploadImage','$Gender','$DateOfBirth')";
    $retDetails = mysqli_query($conn, $detailsQuery);

    if ($retDetails) {
        echo "Account creation was done Successfully";
    } else {
        echo "Error inserting into 'details' table: " . $detailsQuery . "<br>" . $conn->error;
    }
} else {
    echo "Error inserting into 'users' table: " . $userQuery . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
