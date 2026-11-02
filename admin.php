<?php
include_once 'dbConnection.php';

$ref = @$_GET['q'];
$email = $_POST['uname'];
$password = $_POST['password'];

// Sanitasi input
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);

$query = "SELECT email FROM admin WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $query) or die('Error in querying the database');

if ($result && mysqli_num_rows($result) > 0) {
    session_start();
    if (isset($_SESSION['email'])) {
        session_unset();
    }
    $_SESSION["name"] = 'Admin';
    $_SESSION["key"] = 'sunny7785068889';
    $_SESSION["email"] = $email;

    // Ganti header dengan meta refresh untuk debug
    echo "Login successful. Redirecting...";
    echo "<meta http-equiv='refresh' content='2;url=dash.php?q=0'>";
    exit();
} else {
    echo "Invalid email or password. Please check your credentials.";
    exit();
}
