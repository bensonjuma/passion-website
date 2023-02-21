<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

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
   <title>Passion | login</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/logstyle.css">
<link rel="stylesheet" href="css/nav.css">

</head>
<body>
<style>
body {
background-image:url('https://static.vecteezy.com/system/resources/previews/002/741/371/non_2x/banner-web-design-template-yellow-and-green-geometric-stripes-overlapping-with-shadow-on-dark-background-vector.jpg'); 
}
</style>


<!-- header section starts  -->

<header class="header">

<div class="logo">
          <img src="./images/logo1.png" alt="hosting" />
          <a href="login.php">Passionweb</a>
        </div>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="index.php?#about">about</a>
    <a href="index.php?#services">services</a>
    <a href="index.php?#products">products</a>
    <a href="index.php?#contact">contact</a>
    <a href="index.php?#blogs">blogs</a>
    <a href="register.php">Sign Up</a>
   
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
        </div>
    </div>  
</div> 
</header>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <div class='form-check'>
		<input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
		<label class="form-check-label" for="form2Example3">
		Remember me
		</label>
		</div>
      <input type="submit" name="submit" value="login now" class="btn">
      
      <p>don't have an account? <a href="register.php">regiser now</a></p>
   </form>

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
        <a href="index.php">Home</a>
        <a href="">About</a>
        <a href="">Services</a>
        <a href="">Products</a>
        <a href="index.php">Contact</a>
      
    </div>

    <div class="credit">Created by <span>Izzoh</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
