<?php
session_start();
//error_reporting(0);
error_reporting(0);
session_destroy();
if(isset($_SESSION['message'])){
    echo "<script>alert('".$_SESSION['message']."')</script>";
    unset($_SESSION['message']);
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include('header.php');
    ?>

    <div class="section1">
    <label for="" class="img_text">Byzone school for everything</label>
    <img src="imgs/school.png"class="main_img" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="imgs/playground.jpg" class="wel_img" alt="">
           </div>
              <div class="col-md-8">
                <h1>Welcome to Byzone School</h1>
                <p>Byzone School is a private school located in the heart of Nairobi. We offer quality education to our students. We have a team of qualified teachers who are dedicated to ensuring that our students excel in their studies. We have a well-equipped library, computer lab, and science lab to enhance the learning experience of our students. We also have a spacious playground where students can engage in sports and other physical activities. Our school is committed to providing a safe and conducive learning environment for our students. We welcome you to visit our school and see for yourself the great work we are doing.</p>
               </div>
        </div>
    </div>
    <center><H1>Our teachers</H1></center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="imgs/teacher1.png" class="teacher_img" alt="">
                <h3>John Doe</h3>
                <p>Mathematics Teacher</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/teacher2.png" class="teacher_img" alt="">
                <h3>Jane Doe</h3>
                <p>English Teacher</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/teacher3.png" class="teacher_img" alt="">
                <h3>James Doe</h3>
                <p>Science Teacher</p>
            </div>
        </div>
    </div>
    <center><H1>Our Courses</H1></center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="imgs/graphic_design.png" class="course_img" alt="">
                <h3>Mathematics</h3>
                <p>Our mathematics course is designed to help students develop their problem-solving skills and critical thinking abilities. We cover topics such as algebra, geometry, and calculus.</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/digital_marketing.png" class="course_img" alt="">
                <h3>English</h3>    
                <p>Our English course is designed to help students improve their reading, writing, and speaking skills. We cover topics such as grammar, vocabulary, and literature.</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/web_development.png" class="course_img" alt="">
                <h3>Science</h3>    
                <p>Our science course is designed to help students develop their scientific knowledge and skills. We cover topics such as biology, chemistry, and physics.</p>
            </div>
        </div>  
    </div>
    <center><H1>Our Facilities</H1></center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="imgs/lib.jpg" class="facility_img" alt="">
                <h3>Library</h3>
                <p>Our library is well-equipped with a wide range of books and resources to support the learning needs of our students. Students can borrow books and use the library for research and study purposes.</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/lab.jpg" class="facility_img" alt="">
                <h3>Computer Lab</h3>    
                <p>Our computer lab is equipped with modern computers and software to help students develop their computer skills. Students can use the computer lab for research, programming, and other computer-related activities.</p>
            </div>
            <div class="col-md-4">
                <img src="imgs/lab3.jpg" class="facility_img" alt="">
                <h3>Science Lab</h3>    
                <p>Our science lab is equipped with modern equipment and resources to help students conduct experiments and practical activities. Students can use the science lab to learn and explore scientific concepts.</p>
            </div>
        </div>

      <!--  <center><H1>Admission Form</H1></center>

        <div align="center">
            <form action="data_check.php" method="POST">
              <div class="adm_nt">
                <label for="name" class="label_text">Name:</label>
                <input type="text" id="name" name="name" class="input_deg" required>
              </div>
              <div class="adm_nt">
                <label for="name" class="label_text">Email:</label>
                <input type="text" id="Email" name="email"  class="input_deg" required>
              </div>
              <div class="adm_nt">
                <label for="name" class="label_text">Phone</label>
                <input type="number" id="phone" name="phone"  class="input_deg" required>
              </div>
              <div class="adm_nt">
                <label for="name" class="label_text">Message:</label>
                <textarea id="message" name="message"  class="input_txt" required></textarea>
              </div>
              <div class="adm_nt">
                <input type="submit"  class="btn btn-primary" value="Apply" id="submit" name="submit">
              </div>
            </form>
            </div>-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h1 class="text-center mb-4">Admission Form</h1>
                    <form action="data_check.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="number" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message:</label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" value="Apply" id="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </div>
    
<?php
include('footer.php');
?>

   </body>
</html>