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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/ustyle.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="about">

        <h1 class="title">About us</h1>

        <div class="box-container">
            <div class="left-col">
                <img src="images/ab1.jpg" alt="">
            </div>

            <div class="right-col">
                <h3 class="heading-2"> <span>  Save more with OnlineSuper. </span>We give you the lowest prices on all your grocery needs.</h3>

                <div class="box">
                    <h2>Our Vision</h2>
                    <p>What is in the mind for the money in the hand.</p>
                </div>

                <div class="box">
                    <h2>Our Goal</h2>
                    <p>An engaged, trusting and mutually profitable relationship between franchisee and franchisor.

                    </p>
                </div>

            </div>
        </div>

    </section>


    <!-- services section starts  -->

    <section class="services">

        <div class="content">
            <h2 class="heading-1">What we provides?</h2>
        </div>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-shopping-bag"></i>
                <div class="content-1">
                    <h2>Best Prices & Offers</h2>
                    <p>grab your order now</p>
                </div>
            </div>


            <div class="box">
                <i class="fas fa-truck-moving"></i>
                <div class="content-1">
                    <h2>Free Delivery</h2>
                    <p>order over RS.5000</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-lock"></i>
                <div class="content-1">
                    <h2>secure payment</h2>
                    <p>100% secure payment</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <div class="content-1">
                    <h2>24/7 Service</h2>
                    <p>Call us anytime</p>
                </div>
            </div>
            

        </div>

    </section>



    

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
