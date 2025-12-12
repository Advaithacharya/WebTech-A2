<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission Result</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="container">
    <h2 class="title">Registration Completed</h2>

    <div class="form-card" style="text-align:left; color:white;">
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Course:</strong> <?php echo $course; ?></p>
    </div>
</div>

</body>
</html>
