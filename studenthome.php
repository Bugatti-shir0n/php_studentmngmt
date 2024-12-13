<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login.php");

    }

    elseif($_SESSION['usertype']=='admin')
    {
        header("location:login.php");

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header class="header">
        <a href="">Student Dashboard</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="">Courses</a>
            </li>
            <li>
                <a href="">Results</a>
            </li>
            <li>
                <a href="">View Calendar</a>
            </li>

        </ul>

    </aside>

    <div class="content">
        <h1>Side Accordion</h1>
        <p>In this example, we have added an accordion and a dropdown menu inside the side navigation. 
        Click on both to understand how they differ from each other. The accordion will push down the 
        content, while the dropdown lays over the conten</p>

        <input type="text" name="">
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>