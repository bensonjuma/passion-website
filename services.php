
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
    <title>Passion | Services</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<style>
body {
  background-image:url('images/homeimage.png'); 
}
</style>

    
<!-- header section starts  -->

<header class="header">

        <div class="logo">
          <img src="./images/logo1.png" alt="hosting" />
          <a href="services.php">Passionweb</a>
        </div>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#products">products</a>
        <a href="login.php?logout">Logout</a>
    </nav>

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
            <img src="images\product3.jpg" alt="">
            <div class="content">
                <h3>cart item 01(sample webpages templates)</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
       
        <a href="login.php" class="btn">checkout now</a>
    </div>

</header>

 

<a class="about" id="services">

    <h1 class="heading"> <span>services</span>  </h1>

   <div class="row">

        

        <div class="content">
            <h3>Welcome to our web design services page!</h3>
            <p>We are a full-service web design agency and we specialize in creating custom websites for businesses and individuals. Our team of experts has years of experience in designing and developing web solutions that will help you reach your goals.
                
                We offer a range of services that include:<br>
                • Custom website design<br>
                • Responsive website design<br>
                • WordPress development<br>
                • eCommerce website design<br>
                • Logo design<br>
                • SEO optimization<br>
                • Website maintenance and support<br></p>
            <p>  
                Our goal is to help you build a website that will engage your customers, drive more traffic to your website, and increase your sales. We provide personalized service to ensure that your website meets your exact needs and specifications.
                
                We understand that every business has unique needs and goals, so we strive to provide a tailored web design experience for each client.
                
                If you have any questions or would like to learn more about our web design services, please don’t hesitate to contact us. We’d be happy to answer any questions you may have.</p>
            
        </div>
        <div class="image">
            <img src="images/services.jfif" alt="">
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
        <a href="#">about</a>
        <a href="#">services</a>
        <a href="#">products</a>
        <a href="#">contact</a>
        <a href="#">account</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span>Izzoh</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>