<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="shortcut icon"
      href="./images/logo1.png"
      type="image/x-icon"
    />
    <title>Passionweb.com</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
body {
  background-image:url('frontpage.jpg'); 
}
</style>
<body>
    
<!-- header section starts  -->

<header class="header">

<div class="logo">
          <img src="./images/logo1.png" alt="hosting" />
          <a href="about.php">Passionweb</a>
        </div>
   

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="#services">services</a>
        <a href="#products">products</a>
        <a href="#contact">contact</a>
        <a href="help.php">Help</a>
        <a href="#blogs">blogs</a>
        <a href="profile.php">profile</a>
        <a href="home.php?logout=<?php echo $user_id; ?>">logout</a>
    </nav>
    <div>
    
</div>
    <div class="icons">
    
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            
    </div>
   
</header>

<!-- header section ends -->



</section>


    <section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/homeimage.png" alt="">
        </div>

        <div class="content">
            <h3>Welcome to our website!</h3>
            <p>We are a small web design and development agency based in Kenya. We specialize in creating custom websites and applications that meet the needs of our clients. Our team is comprised of highly skilled professionals with a passion for web design and development.
                At our agency, we believe that the best websites are ones that are easy to use and look great. We also know that creating a successful website requires more than just good design and coding. That’s why we focus on creating websites that are tailored to our clients’ needs, while providing exceptional customer service throughout the entire process.</p>
            <p> We have years of experience in the web design and development industry and have worked with a variety of clients from small businesses to large corporations. Our goal is to provide our clients with top-notch service that meets their needs, while staying within their budget.
                If you’re looking for a web design and development agency that is reliable, creative, and responsive, then look no further. Contact us today to learn more about how we can help you create a website that meets your needs and exceeds your expectations.</p>
        </div>

    </div>

</section>



<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    

    <div class="links">
        <a href="#">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#products">products</a>
        <a href="help.php">Help</a>
        <a href="#blogs">blogs</a>
        <a href="profile.php">profile</a>
        <a href="login.php?logout.php">log out</a>
    </div>

    <div class="credit">created by <span>Izzoh</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>