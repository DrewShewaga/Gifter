<?php

    require_once('admin/scripts/signUp.php');

    if(isset($_POST['submit'])){
        //Automaticlly remove spaces
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $company = trim($_POST['company']);
        $phone = trim($_POST['phone']);

        //validation
        if(empty($name) || empty($email)){
            $message = 'Please fill all of the requires fields.';
        }else{
            signUp($name, $email, $company, $phone);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gifter - Sign Up</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main class="container">
    
        <header class="mainHeader">
            <h3 class="hidden">Header</h3>
            <img src="images/6side.png" alt="6-SIDE Logo" class="sixLogo">
        </header>

        <?php if(!empty($message)): ?>
        <p><?php echo $message; ?></p>
        <?php endif; ?>

        <?php
            if(!empty($_GET['signup'])){
                if($_GET['signup']='success'){
                    echo('<div class="responseBox"><h2 class="response">Thank you for signing up! Your email has been added to our mail list.</h2></div>');
                }
            }
        ?>

        <section class="landing">
            <h3 class="hidden">Landing area</h3>
            <div class="imgWrap">
                <img src="images/gifter.svg" alt="Gifter Logo" class="gifterLogo">
            </div>
            <h2 class="tagline">The gifting solution for the digital world.</h2>
            <p class="downArrow">V</p>
        </section>

        <!-- <p class="downArrow">V</p> -->

        <section class="mailForm">
            <h3 class="hidden">Sign up form</h3>

            <div class="textArea">
                <h2 class="knowMore">Want to know more?</h2>
                <h4 class="signUp">Sign up for our email list.</h4>
            </div>

            <form action="index.php" method="POST" class="form">

                <input type="text" name="name" id="name" class="formInput" placeholder="Full Name *">

                <input type="email" name="email" id="email" class="formInput" placeholder="Email Address *">

                <input type="text" name="company" id="company" class="formInput" placeholder="Company">

                <input type="tel" name="phone" id="phone" class="formInput" placeholder="Phone Number">

                <input type="submit" value="Submit" name="submit" id="submit">

            </form>
        </section>
    
    </main>
    <script src="js/main.js"></script>
</body>
</html>