<?php
$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];
$comment = $_POST['comments'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Contact Form</title>

    <!--BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="col-6 position-absolute start-50 top-50 translate-middle">
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="name">Name</label>
            <div class="col form-control"><?php echo filter_var($name); ?></div>
        </div>
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="email">Email</label>
            <div class="col form-control"><?php echo filter_var($email, FILTER_VALIDATE_EMAIL); ?></div>
        </div>
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="issue">Issue</label>
            <div class="col form-control"><?php echo $issue; ?></div>
        </div>
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="comment">Comment</label>
            <div class="col form-control"><?php echo $comment; ?></div>
        </div>

    </div>
</body>

</html>