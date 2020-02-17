<?php
$con=mysqli_connect("sql209.epizy.com","epiz_24994120","U9bJiwxMr4I");
if(!$con){
    echo " Not connected to database";
}
if(!mysqli_select_db($con,'epiz_24994120_website')){
    echo "Database not selected";
}

if(isset($_POST['submit'])){
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    

    move_uploaded_file($temp,"pictures/".$name);
    $url = "http://achile.epizy.com/pictures/$name";
    $nam= $_POST['nam'];
    $num= $_POST['num'];

    $nams = $_FILES['file2']['name'];
    $tmp = $_FILES['file2']['tmp_name'];

    move_uploaded_file($tmp,"videos/".$nams);
    $urls = "http://achile.epizy.com/videos/$nams";
    $sql= "INSERT INTO form (name,phone,filename,filenames,url,urls) VALUE('$nam','$num','$name','$nams','$url','$urls')";
    if(!mysqli_query($con,$sql)){
        echo "not insert please try again";
    }

    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Tracy Beauty Blend</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
     <?php

$result = mysqli_query($con,"select * from details"); // fetch data from database

while($row = mysqli_fetch_array($result))
{
?>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p><?php echo $row['webname']; ?></p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['openhours']; ?> <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row['contactdeatils']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
     <?php
}
?>
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                       <a style=" width: 120px; height:200px; margin-top:140px;" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        
                         <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.php">Home</a></li>
                                    <li><a href="./portfolio.php">Gallary</a></li>
                                    <li ><a href="./service.php">Services</a></li>
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./zoom.php">Zoom TV</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>
                                <!-- Cart Icon -->
                               <!--book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="https://calendly.com/samueldan/60min" class="btn akame-btn">Book Now</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <!-- Header Area End -->


    <!-- Contact Information Area End -->

    <!-- Contact Area Start -->
    <center>
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
          <?php
 if(isset($_POST['submit'])){
    echo "<br />".$nam." Thank you for registering we will get back to you shortly";
 }
?>            
                        <h2>Registration</h2>
                        <p>Please read through,fill in your details and links to your picture and video.</p>
                    </div>
                    <!-- Form -->
                    <form action="reg.php" method="post" enctype="multipart/form-data" class="akame-contact-form border-0 p-0">
                    <div class="col-lg-6">
                                <input type="text" name="nam" class="form-control mb-30" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="num" class="form-control mb-30" placeholder="Your number" required>
                            </div>
                    <div class="col-lg-6">
                               Pictures: <input type="file" name="file" class="form-control mb-30" placeholder="picture" required>
                            </div>
                            <div class="col-lg-6">
                               Video: <input type="file" name="file2" class="form-control mb-30" placeholder="video" required>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="submit" value="upload" class="btn akame-btn btn-3 mt-15 active">Submit</button>
                            </div>
                        </form>
                        </section>
                        <center>
                      


   <!-- Footer Area Start -->
  <?php
include ('footer.php')
?>