<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/48e39edd0b.js" crossorigin="anonymous"></script>
    <title>VV</title>
</head>
<body>
    <!-- HEADER -->
    <section class="header_section">

        <div class="header_left_section">
        <!-- LOGO -->
        </div>

        <div class="header_mid_section">
        <!-- 
            HOME
            SHOP
            WISHLIST
            CART

         -->
                <a href="/register.html">Home</a>
                <a href="/register.html">Shop</a>
                <a href="/register.html">Wishlist</a>
                <a href="/register.html">Cart</a>

        </div>

        <div class="header_right_section">
            <?php if(array_key_exists("username", $_SESSION)) 
            {
            ?>
                <h4>Welcome, <?php echo $_SESSION["username"] ?> </h4>
                <a href="/logout.php">Logout</a>
            <?php 
            }else{
            ?>     
                <div class="signInUp">
                    <a href="/register.html">Sign Up</a>
                    <a href="/login.html">Sign In</a>
                </div>  
            <?php              
            }
            ?>  
        </div>


    </section>
    <!-- MAIN BODY / BANNERS    -->
    <section class="main_page_section">

    </section>

    <!-- FOOTER -->
    <section class="footer_section">

    </section>
</body>
</html>