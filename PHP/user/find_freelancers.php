<?php session_start(); ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/find_freelancers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Post Your Job</title>
</head>

<body>
    <div class="container">

        <a id="next" href="add_job.php">Next</a>

    </div>
</body>

</html>