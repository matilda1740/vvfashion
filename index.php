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
    <title>VV | HOME </title>
</head>

<body>
    <!-- HEADER -->
    <section class="header_section">

        <div class="header_left_section">
            <!-- LOGO -->
            <img src="public/images/logo-removebg-preview.png" alt="">
        </div>

        <div class="header_mid_section">
            <a href="/index.php"><i class="fas fa-home"></i>Home</a>
            <a href="/allProducts.html"><i class="fas fa-shopping-bag"></i>Shop</a>
            <a href="/wishlist.html"><i class="far fa-heart"></i>Wishlist</a>
            <a href="/cart.html"><i class="fas fa-shopping-cart"></i>Cart</a>
        </div>

        <div class="header_right_section">
            <?php if (array_key_exists("username", $_SESSION)) {
?>
                <div class="hr_button">
                    <a href="/profile.html" class="profile">
                        <i class="fas fa-user-circle"></i><?php echo $_SESSION['username'] ?></a>
                    <p> / </p>
                    <a href="/logout.php"><i class="fas fa-door-open"></i>Logout</a>
                </div>
            <?php
}
else {
?>     
                <div class="hr_button">
                    <a href="/register.html"><i class="fas fa-sign-in-alt"></i>Sign Up</a>
                    <p> / </p>
                    <a href="/login.html">Sign In</a>
                </div> 
            <?php
}
?>  
        </div>


    </section>
    <!-- MAIN BODY / BANNERS    -->
    <section class="main_page_section">

        <!-- LANDING PAGE START -->
        <section class="banner_section">
            <div class="banner_left">
                <h3>Paris Fashion Week <span>2078</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut officiis culpa voluptatum vitae nobis, placeat quia rem sequi libero tenetur.</p>
            </div>
            <div class="banner_right">
            
            </div>
        </section>

        <!-- BEST PRODUCTS -->
        <section class="featured_products_section">
            <div class="home_products_row circular_div">
                <div class="hpr_left">
                    <div class="image_container home_mens"></div>
                </div>
                <div class="hpr_right">
                    <h3>Men's Fashion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam illum fugiat doloribus? Mollitia officiis quaerat debitis perspiciatis libero, voluptatum deleniti molestias veniam vero, atque suscipit. Nesciunt ab sint repellendus commodi.</p>
                    <a href="allProducts.html">Shop Men's Products</a>
                </div>
            </div>
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40%" height="40%"
                id="blobSvg">
                <path id="blob"
                    d="M462.5,282Q447,314,410,326.5Q373,339,383,393Q393,447,356,454.5Q319,462,284.5,464Q250,466,222.5,443Q195,420,170.5,406.5Q146,393,121.5,377Q97,361,68.5,339.5Q40,318,52,284Q64,250,68.5,221Q73,192,65,151Q57,110,81.5,81Q106,52,141,37.5Q176,23,213,46Q250,69,288,43Q326,17,350,48Q374,79,388.5,109Q403,139,413.5,166Q424,193,451,221.5Q478,250,462.5,282Z"
                    fill="#c1e1d2"></path>
            </svg>
            <div class="home_products_row reversed_row circular_div">
                <div class="hpr_left">
                    <div class="image_container home_womens"></div>
                </div>
                <div class="hpr_right">
                    <h3>Women's Fashion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam illum fugiat doloribus? Mollitia officiis
                        quaerat debitis perspiciatis libero, voluptatum deleniti molestias veniam vero, atque suscipit. Nesciunt ab
                        sint repellendus commodi.</p>
                    <a href="allProducts.html">Shop Women's Products</a>
                </div>
            </div>
            <div class="home_products_row circular_div">
                <div class="hpr_left">
                    <div class="image_container home_child"></div>
                </div>
                <div class="hpr_right">
                    <h3>Children's Fashion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam illum fugiat doloribus? Mollitia officiis
                        quaerat debitis perspiciatis libero, voluptatum deleniti molestias veniam vero, atque suscipit. Nesciunt ab
                        sint repellendus commodi.</p>
                    <a href="allProducts.html">Shop Children's Products</a>
                </div>
            </div>
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40%"
                height="40%" id="blobSvg">
                <path id="blob"
                    d="M462.5,282Q447,314,410,326.5Q373,339,383,393Q393,447,356,454.5Q319,462,284.5,464Q250,466,222.5,443Q195,420,170.5,406.5Q146,393,121.5,377Q97,361,68.5,339.5Q40,318,52,284Q64,250,68.5,221Q73,192,65,151Q57,110,81.5,81Q106,52,141,37.5Q176,23,213,46Q250,69,288,43Q326,17,350,48Q374,79,388.5,109Q403,139,413.5,166Q424,193,451,221.5Q478,250,462.5,282Z"
                    fill="#f4f4f4"></path>
            </svg>
            <div class="home_products_row reversed_row circular_div">
                <div class="hpr_left">
                    <div class="image_container home_pets"></div>
                </div>
                <div class="hpr_right">
                    <h3>Pets' Fashion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam illum fugiat doloribus? Mollitia officiis
                        quaerat debitis perspiciatis libero, voluptatum deleniti molestias veniam vero, atque suscipit. Nesciunt ab
                        sint repellendus commodi.</p>
                    <a href="allProducts.html">Shop Pets' Products</a>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section class="features_section">
            <div class="feature_row">
                <i class="fas fa-shield-alt"></i>
                <h4>Secure Online Payments</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut eaque molestiae, adipisci deserunt accusantium
                    autem aut
                    harum unde velit ab.</p>
            </div>
            <div class="feature_row">
                <i class="fas fa-tshirt"></i>
                <h4>Quality Fabric</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut eaque molestiae, adipisci deserunt accusantium
                    autem aut harum unde velit ab.</p>
            </div>
            <div class="feature_row">
                <i class="fas fa-baby-carriage"></i>
                <h4>Free Shipping</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut eaque molestiae, adipisci deserunt accusantium
                    autem aut
                    harum unde velit ab.</p>
            </div>
        
        </section>
        <!--  -->
    </section>

    <!-- FOOTER -->
    <section class="footer_section">

    </section>
</body>

</html>