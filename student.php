<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION["usertype"] == "admin") {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
 <?php
    include('student_css.php');
    ?>
   
</head>
<body>
    <?php
    include('student_sidebar.php');
    ?>
    
    <div class="content">
        <div class="navbar d-flex justify-content-between">
            <span class="fs-4">Student Dashboard</span>
            <a href="logout.php" class="btn btn-dark btn-sm">Logout</a>
        </div>
        
        <div class="container mt-5">
            <h2>Welcome to your dashboard!</h2>
            <p>Use the sidebar to navigate.</p>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
