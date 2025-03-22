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
$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_assoc($result);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $usertype = 'student';
    $sql = "UPDATE user SET username = '$username', email = '$email', phone = '$phone', password = '$password', usertype = '$usertype' WHERE id = $id";
    if (mysqli_query($data, $sql)) {
        $_SESSION['message'] = "Student updated successfully!";
        header("Location: view_student.php");
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
    <title>Admin Dashboard</title>
    
    <style>
         .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .form-container {
            background: #add8e6;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    
    <?php
    include('home_css.php');
    ?>
</head>
<body>
    <?php
    include('admin_sidebar.php');
    ?>
    <div class="container center-form">
        <div class="form-container w-50">
            <h3 class="text-center mb-4">Update Student</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
                   
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>
