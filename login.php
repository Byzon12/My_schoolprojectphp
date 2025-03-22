<!--!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<center>
    <div class="form_deg">
        <form action="" >
            <div>
                <label for="">Username</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password" required>
            </div>
            <div>
               
                <input type="submit" name="submint" value="Login" required>
            </div>
        </form>
    </div>
</center>


</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Style.css">
   
</head >

<body>
    <div class="back">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom " >
    <div class="container">
        <a class="navbar-brand" href="#">Byzone - School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="add.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="update.php">Admission</a></li>
                <li class="nav-item"><a class="nav-link" href="view.php">About</a></li>
                <li class="nav-item">
                    <a class="btn btn-light text-primary" href="login.php">Logins</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="form-container text-center">
        <h2 class="mb-3 text-primary">Login</h2>
        <p class="text-danger">
                <?php

                error_reporting(0);
                session_start();
                session_destroy();
               
                echo$_SESSION['LoginMessage']
                
                ?>
         </p>


        <form action="login_check.php" method="post">
       
            <div class="mb-3 text-start">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
    </div>
   <!-- Footer -->

<footer class="bg-primary text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">&copy; 2025 Byzone School. All Rights Reserved.</p>
    </div>
</footer>
</div>

</body>
</html>
