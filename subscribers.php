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
$Email = $_POST["EmailAddress"];

// Prepare and execute SQL query to insert into 'safetytips' table
$userQuery = "INSERT INTO subscribers VALUES ('$Email')";
$retUsers = mysqli_query($conn, $userQuery);

// Check if the query was successful
if ($retUsers) {
    echo "Subscrided successfully";
} else {
    echo "Error inserting into 'subscribers' table: " . $userQuery . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
