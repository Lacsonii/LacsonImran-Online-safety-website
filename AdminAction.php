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
$PostID = $_POST["TopicID"];
$Desc = $_POST["TipsDescription"];
$Postdate = $_POST["UpdatedDate"];
$topic = $_POST["Topic"];

// Prepare and execute SQL query to insert into 'safetytips' table
$userQuery = "INSERT INTO safetytips (TopicID, TipsDescription, UpdatedDate, Topic) VALUES ('$PostID','$Desc','$Postdate','$topic')";
$retUsers = mysqli_query($conn, $userQuery);

// Check if the query was successful
if ($retUsers) {
    echo "Record posted successfully";
} else {
    echo "Error inserting into 'safetytips' table: " . $userQuery . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
