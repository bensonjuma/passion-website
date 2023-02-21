<?php

include 'config.php';


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
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
   <title>Passion | Register</title>
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
    <a href="login.php">Log In</a>
   
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
      <h3>Register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">Login now</a></p>

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
