<?php
session_start();
//error_reporting(0);
$host="localhost";
$user="root";
$pass= "";
$db = "school_project";
$conn = new mysqli($host,$user,$pass,$db);
if ($conn===false) {
    die("Connection failed: ");
}

if(isset($_POST["submit"]))
 {
    $data_name = $_POST["name"];
   // $data_email = $_POST["email"];
   $data_email = isset($_POST["email"]) ? $_POST["email"] : '';
    $data_phone = $_POST["phone"];
    $data_message= isset($_POST["message"]) ? $_POST["message"] : '';

    $sql= "INSERT INTO admission (name,email,phone, message) VALUES ('$data_name','$data_email','$data_phone','$data_message')";
    $result= mysqli_query($conn,$sql);


    if ($result) {
        $_SESSION['message'] = "Data inserted successfully";
        header("Location:home.php");
        
    }
    else{
        echo "Data not inserted";
    }
}

?>