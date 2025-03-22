<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION["usertype"] == "student") {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
       
</head>
<body>
<?php
include('admin_sidebar.php');
?>
    <!-- Sidebar -->
  

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <div class="navbar">
            <span>Admin Dashboard</span>
            <a href="logout.php" class="btn btn-dark btn-sm logout-btn">Logout</a>
        </div>

        <!-- Content Box -->
        <div class="box mt-4">
            <h2>Sidebar Accordion</h2>
            <p>
                In this example, we have added an accordion and a dropdown menu inside the side navigation. 
                Click on both to understand how they differ from each other. The accordion 
                will push down the content, while the dropdown lays over the content.
            </p>
            <input type="text" class="form-control w-25">
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
