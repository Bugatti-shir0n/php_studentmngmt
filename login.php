<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body background="images/school.jpg" class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg"> 
                Login Form

                <h4>
                    <?php

                    error_reporting(0);
                    session_start();
                    session_destroy();
                    
                    echo $_SESSION['loginMessage'];

                    ?>
                </h4>

            </center>
            <form action="login_check.php" method="POST" class="login_form" action="">
                <div>
                    <label class="label_deg" for="">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg" for="">Password</label>
                    <input type="text" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="Submit" value="Login">
                </div>
            </form>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>