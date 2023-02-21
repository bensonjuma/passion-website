<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

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
   <title>update_profile</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css.css">

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
          <a href="profile.php">Passionweb</a>
        </div>
   

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="#">about</a>
        <a href="#">services</a>
        <a href="#">products</a>
        <a href="#">contact</a>
        <a href="">blogs</a>
       
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
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
               
   
</header>
</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      
   </div>

</div>
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    

    <div class="links">
        <a href="home.php">home</a>
        <a href="home.php?#about">about</a>
        <a href="services.php">services</a>
        <a href="home.php?#products">products</a>
        <a href="help.php">Help</a>
      
    </div>

    <div class="credit">created by <span>Izzoh</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
</body>
</html>
        </body>
        </html>