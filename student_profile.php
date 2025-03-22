<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
} elseif ($_SESSION["usertype"] == "admin") {
    header("Location: login.php");
    exit();
}
$host ="localhost";
$user ="root";
$password = "";
$dbname = "school_project";
$data = mysqli_connect($host, $user, $password, $dbname);
$username = $_SESSION["username"];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['student_profile'])) {
  
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sql = "UPDATE user SET email = '$email', phone = '$phone', password = '$password' WHERE username = '$username'";
    if (mysqli_query($data, $sql)) {
        echo "<script>alert('Student updated successfully!');
        window.location.href='student_profile.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($data);
    }
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
            <span class="fs-4">Welcome <?php echo $row['username']; ?></span>
            <a href="logout.php" class="btn btn-dark btn-sm">Logout</a>
        </div>
       

     <div class="container center-form">
        <div class="form-container w-50">
            <h3 class="text-center mb-4">Edit your details <?php echo $row['username'];?></h3>
            <form action="" method="POST">
               <div class="mb-3">
                    
                   
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"  value="<?php echo $row['email']; ?>"  required>
                   
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"   value="<?php echo $row['phone']; ?>" required>
                  
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"  value="<?php echo $row['password']; ?>" required>
                   
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="student_profile">Make Changes</button>
                </div>
            </form>

        </div>

    </div>
    </div>

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
