<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION["usertype"] == "student") {
    header("Location: login.php");
    exit();
}
$host ="localhost";
$user ="root";
$password = "";
$dbname = "school_project";
$data = mysqli_connect($host, $user, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user WHERE usertype = 'student'";
$result = mysqli_query($data, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        
    </style>
    <?php
    include('home_css.php');
    ?>
</head>
<body>
    <?php
    include('admin_sidebar.php');
    ?>


    <!-- Main Content -->
    <div class="content">
    <div class="navbar">
            <span>student data</span>
            <a href="logout.php" class="btn btn-dark btn-sm logout-btn">Logout</a>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
               <?php
                while($row = $result->fetch_assoc())
                {           
                    echo "<tr>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['password']}</td>
                       <td><a  href='delete.php?student_id={$row['id']}' class='btn btn-danger delete''>Delete</a></td>
                       <td><a href='update.php?student_id={$row['id']}' class='btn btn-primary''>Update</a></td>

                    </tr>";
                }
               ?>
            </tbody>
        </table>


       
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
