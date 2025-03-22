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
$user = "root";
$password = "";
$dbname = "school_project";
$data = mysqli_connect($host, $user, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $check_user = "SELECT * FROM user WHERE username = '$username' OR email = '$email' OR phone = '$phone'";
    $result = mysqli_query($data, $check_user);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        echo "<script>alert('User already exists!');
        window.location.href='add_student.php'</script>";
        exit();
    }

    else{
        $sql = "INSERT INTO user (username, email, phone, password, usertype) VALUES ('$username', '$email', '$phone', '$password', '$usertype')";
        if (mysqli_query($data, $sql))
         {
        echo "<script>alert('Student added successfully!');
         window.location.href='add_student.php';</script>";
        exit();}
        else 
        {
        echo "Error: " . $sql . "<br>" . mysqli_error($data);
         }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php
    include('home_css.php');
    ?>

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
    
</head>
<body>
    <?php
    include('admin_sidebar.php');
    ?>

    <!-- Sidebar -->
  

    <!-- Main Content -->
    <div class="container center-form">
        <div class="form-container w-50">
            <h3 class="text-center mb-4">Add Student</h3>
            <form action="add_student.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="usertype" class="form-label">User Type</label>
                    <select class="form-select" id="usertype" name="usertype" required>
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </div>
            </form>
        </div>
    </div>

       
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
