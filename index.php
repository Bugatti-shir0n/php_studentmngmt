<?php
     
     error_reporting(0);
     session_start();
     session_destroy();

     if($_SESSION['message'])
     {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>

        alert('$message');

        </script>";
     }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav>
        <label class="logo">Lynn School</label>
        <ul>
            <li><a href="">Home</a> </li>
            <li><a href="">Contact</a> </li>
            <li><a href="">Admission</a> </li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">Access your child's records from anywhere</label>
        <img class="main_img" src="images/sch2.jpeg" alt="">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="images/sch3.jpeg" alt="">

            </div>
            <div class="col-md-8">
                <h1>Welcome to Lynn-School</h1>
                <p>LS has been committed to global learning long before it became an indispensable feature of contemporary education. 
                    Established in 2020, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and 
                    Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment 
                    where manifold viewpoints are prized and celebrated.MEMS has been committed to global learning long before it became an indispensable feature 
                    of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel 
                    and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment 
                    where manifold viewpoints are prized and celebrated.</p>

            </div>

        </div>

    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <img class="teacher" src="images/tchr1.jpeg" alt="teacher">
                <p>In a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated</p>
            </div>

            <div class="col-md-4">
                 <img class="teacher" src="images/tchr2.jpeg" alt="teacher">
                 <p>In a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated</p>
            </div>

            <div class="col-md-4">
                 <img class="teacher" src="images/tchr3.jpeg" alt="teacher">
                 <p>In a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated</p>
            </div>

        </div>
    </div>

    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <img class="teacher" src="images/tchr1.jpeg" alt="teacher">
                <h3>Web Development</h3>
            </div>

            <div class="col-md-4">
                 <img class="teacher" src="images/tchr2.jpeg" alt="teacher">
                 <h3>Graphics Design</h3>
            </div>

            <div class="col-md-4">
                 <img class="teacher" src="images/tchr3.jpeg" alt="teacher">
                 <h3>Marketing</h3>

        </div>
    </div>

    <center >
		<h1 class="adm">Admission Form</h1>
	</center>

    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message" id=""></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
            </div>
        </form>

    </div>

    <footer>
        <h3 class="footer_text">All @Copyright reserved by Lynn Dev</h3>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>