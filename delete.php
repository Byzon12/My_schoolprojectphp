<?php
$host ="localhost";
$user ="root";
$password = "";
$dbname = "school_project";
$data = mysqli_connect($host, $user, $password, $dbname);

if($_GET['student_id'])
{
    $id = $_GET['student_id'];
    $sql = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($data, $sql))
    {
        echo "<script>
        
        alert('Student deleted successfully!');
        window.location.href='view_student.php';</script>";
        exit();
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($data);
    }
}

?>