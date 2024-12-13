<?php

session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login.php");

    }

    elseif($_SESSION['usertype']=='student')
    {
        header("location:login.php");

    }

    $host="localhost";
    $user="root";
    $password="";
    $db="schoolproject";

    $data=mysqli_connect($host, $user, $password, $db);


    $sql="SELECT * from admission";
    $result=mysqli_query($data,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <?php
    include 'admin_css.php';
    ?>

</head>

<body>

    <?php
    include 'admin_sidebar.php';
    ?>
    

    <div class="content">
        <center>
        <h1>Applied for Admission</h1>

        <br><br>

        <table style="border-collapse: collapse;">

            <tr>
                <th style="padding: 20px; font-size: 15px; border: 1px solid black;">Name</th>
                <th style="padding: 20px; font-size: 15px; border: 1px solid black;">Email</th>
                <th style="padding: 20px; font-size: 15px; border: 1px solid black;">Phone</th>
                <th style="padding: 20px; font-size: 15px; border: 1px solid black;">Message</th>
            </tr>

            <?php

            while($info=$result->fetch_assoc())
            {
            ?>


            <tr>
                <td style="padding: 20px; border: 1px solid black;">
                    <?php echo"{$info['name']}"; ?>
                </td>
                <td style="padding: 20px; border: 1px solid black;">
                    <?php echo"{$info['email']}"; ?>
                </td>
                <td style="padding: 20px; border: 1px solid black;">
                    <?php echo"{$info['phone']}"; ?>
                </td>
                <td style="padding: 20px; border: 1px solid black;">
                    <?php echo"{$info['message']}"; ?>
                </td>
    
            </tr>
    
            <?php
                
            
            }

            ?>


            <tr>
                <td style="padding: 20px;"></td>
                <td style="padding: 20px;"></td>
                <td style="padding: 20px;"></td>
                <td style="padding: 20px;"></td>

            </tr>

            <?php
            
            ?>

            


        </table>
        </center>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>