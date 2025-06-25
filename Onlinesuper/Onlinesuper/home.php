<?php

@include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>

    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/ustyle.css">
</head>
<body>
    
    <?php include'header.php'?>
  
    <!-- home start -->
    <section class="home" id="home">

        <div class="content">
            <h3>We are here to serve only the <span> best product </span> for you </h3>
            <a href="products.php" class="btn"> get yours now </a>
        </div>

    </section>
    <!-- home end -->
    

    <!-- banner start -->

    <section class="banner-container">

        <div class="banner">
            <img src="images/vb.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Vegetables</h3>
                <a href="category.php?category=vegitables" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/fb1.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>fruits</h3>
                <a href="category.php?category=fruits" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/be.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Bekery</h3>
                <a href="category.php?category=bekery" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/bv3.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Baverage</h3>
                <a href="category.php?category=baverage" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/bbp.webp" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Baby Product</h3>
                <a href="category.php?category=baby product" class="btn">shop now</a>
            </div>
        </div>

         <div class="banner">
            <img src="images/d1.jpeg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Dairy</h3>
                <a href="category.php?category=dairy" class="btn">shop now</a>
            </div>
            
        </div>

        <div class="banner">
            <img src="images/ffd.jpg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Food Cupboard</h3>
                <a href="category.php?category=food cupboard" class="btn">shop now</a>
            </div>
            
        </div>

        <div class="banner">
            <img src="images/pha.jpeg" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Pharmacy</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            
        </div>

    </section>
 
    <!-- banner end -->

    <?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>