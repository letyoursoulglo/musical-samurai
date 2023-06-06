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
    <div class="container">

    </div>
    <form id="form" class="col-6 position-absolute start-50 top-50 translate-middle" action="submit.php" method="post">
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-2">
            <label class="col-sm-1 col-sm-label" for="issue">Issue</label>
            <select class="form-select" name="issue" id="issue">
                <option selected>Select Issue</option>
                <option value="query">Query</option>
                <option value="feedback">Feedback</option>
                <option value="complaint">Complaint</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="comments" id="comments" style="height: 100px"></textarea>
            <label for="comments">Comments</label>
        </div>
        <button id="btn" class="btn btn-primary mt-3" type="submit">Submit</button>

    </form>
</body>

</html>