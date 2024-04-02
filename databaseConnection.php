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
$Email = $_POST["EmailAddress"];
$IDtype  = isset($_POST["IDtype"]) ? $_POST["IDtype"] : ""; // Use isset() to check if the key exists
$Number = $_POST["IDNumber"];
$UploadImage = $_POST["UploadImage"];
$Gender = $_POST["Gender"];
$DateOfBirth = $_POST["DateOfBirth"];
$password = $_POST["Password"];

// Prepare and execute SQL query to insert into 'users' table
$userQuery = "INSERT INTO webusers (Username, Password) VALUES ('$Username', '$password')";
$retUsers = mysqli_query($conn, $userQuery);

// Prepare and execute SQL query to insert into 'details' table
if ($retUsers) {
    $detailsQuery = "INSERT INTO useraccount (FirstName,LastName, Username,Country,EmailAddress, Gender,IDtype,IDNumber,UploadImage,DateOfBirth) VALUES ('$FirstName', '$LastName', '$Username','$Country','$Email','$Gender','$IDtype', '$Number','$UploadImage','$DateOfBirth')";
    $retDetails = mysqli_query($conn, $detailsQuery);

    if ($retDetails) {
        echo "Record created successfully";
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
