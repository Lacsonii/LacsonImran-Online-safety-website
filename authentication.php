<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

session_start();

$host = "localhost";
$userID = "root";
$pass = "";
$dbname = "smc_limited";

// Create connection
$conn = new mysqli($host, $userID, $pass, $dbname);

if(mysqli_connect_error()){
    exit('Failedmtp connect;' .mysqli_connect_error());
}
if(isset($_POST['username'], $_POST['password']))
{
    // exit('Username and password can NOT be empty')

    // if($stmt = $con->prepare('Select , password'))
    // {

    // }
}
?>