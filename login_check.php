<?php
session_start();
error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "school_project";

$data = mysqli_connect($host, $user, $password, $dbname);
if (!$data) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($data, $_POST['username']);
    $password = $_POST['password']; // Password entered by user

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Since passwords are stored in plain text, compare directly
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = $row["usertype"]; // Store user type

            if ($row["usertype"] == "student") {
                header("location: student.php");
                exit();
            } elseif ($row["usertype"] == "admin") {
                header("location: admin.php");
                exit();
            }
        } else {
            $_SESSION['LoginMessage'] = "Invalid username or password";
            header("location: login.php");
            exit();
        }
    } else {
        $_SESSION['LoginMessage'] = "Invalid username or password";
        header("location: login.php");
        exit();
    }
}
?>
