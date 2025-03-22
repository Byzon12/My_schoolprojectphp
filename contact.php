<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
<body>
<?php
include('header.php');
?>
   
    <div class="content">
   
        
        <div class="container mt-5">
            <h2>Get in Touch</h2>
            <p>If you have any questions, feel free to reach out to us.</p>

            <h3>Contact Details</h3>
            <p><strong>Email:</strong> support@schoolplatform.com</p>
            <p><strong>Phone:</strong> +254 700 123 456</p>
            <p><strong>Address:</strong> 123 Learning Street, Nairobi, Kenya</p>

            <h3>Send Us a Message</h3>
            <form action="send_message.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
