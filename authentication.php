<?php

session_start();

$host = "localhost";
$userID = "root";
$pass = "";
$dbname = "smc_limited";

// Create connection
$conn = new mysqli($host, $userID, $pass, $dbname);

if (mysqli_connect_error()) {
    exit('Failed to connect;' . mysqli_connect_error());
}

// Check if the user is already locked out
if (isset($_SESSION['locked']) && $_SESSION['locked'] > time() - 600) {
    // User is locked out, display a message
    $remainingTime = ($_SESSION['locked'] + 600) - time();
    $_SESSION['error'] = "You are temporarily locked out. Please try again after " . gmdate("i:s", $remainingTime) . ".";
    header("Location: index.php");
    exit;
}

if (isset($_POST['username'], $_POST['password'])) {
    if ($stmt = $conn -> prepare('SELECT TypeId, userpassword FROM webusers WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($TypeId, $userpassword);
            $stmt->fetch();

            if ($_POST['password'] === $userpassword) {
                session_regenerate_id();
                $_SESSION['loggedIn'] = true;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['TypeId'] = $TypeId;

                echo "Welcome back, " . htmlspecialchars($_SESSION['name'], ENT_QUOTES) . "!";
            } else {
                // Increment failed login attempt count
                if (!isset($_SESSION['failed_login_attempts'])) {
                    $_SESSION['failed_login_attempts'] = 1;
                } else {
                    $_SESSION['failed_login_attempts']++;
                }

                // Check if user has reached maximum failed attempts
                if ($_SESSION['failed_login_attempts'] >= 3) {
                    // Lock the user out for 10 minutes
                    $_SESSION['locked'] = time();
                    $_SESSION['error'] = "You have exceeded the maximum number of failed login attempts. Your account has been temporarily locked.";
                    header("Location: LogIn.php");
                    exit;
                } else {
                    $_SESSION['error'] = "Incorrect username and/or password!";
                    header("Location: LogIn.php");
                    exit;
                }
            }
        } else {
            $_SESSION['error'] = "Incorrect username and/or password!";
            header("Location: LogIn.php");
            exit;
        }
    }
}
?>
