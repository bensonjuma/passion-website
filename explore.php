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
          <a href="index.php">Passionweb</a>
        </div>
   

    <nav class="navbar">
        <a href="#">home</a>
        <a href="#about">about</a>
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

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3>Welcome User </h3>
        <h3>Know more about Us</h3>
        <p> We are a web design and development agency committed to creating beautiful, user-friendly, and engaging experiences.</p>
       
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