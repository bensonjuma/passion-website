<?php

include 'config.php';

session_start();
$user_id = $_SESSION['user_id'];

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
          <a href="home.php">Passionweb</a>
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
        <h3>Welcome to </h3>
        <h3>Passion web design</h3>
        <p> We are a web design and development agency committed to creating beautiful, user-friendly, and engaging experiences.</p>
        <a href="#about" class="btn">Explore</a>
    </div>
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
                At our agency, we believe that the best websites are ones that are easy to use and look great. We also know that creating a successful website requires more than just good design and coding. That’s why we focus on creating websites that are tailored to our clients’ needs, while providing exceptional customer service throughout the entire process...</p>
           
            <a href="about.php" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="about" id="services">

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
          <p> Click below to know more...</p>
            <a href="services.php" class="btn">learn more</a>
        </div>
        <div class="image">
            <img src="images/services.jfif" alt="">
        </div>
    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product1.jfif" alt="">
            </div>
            <div class="content">
                <h3>E-commerce Solutions</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$35.99 <span>$40.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product2.jfif" alt="">
            </div>
            <div class="content">
                <h3>Responsive Web Design</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Digital Marketing Services</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$19.99 <span>$25.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>I recently had the pleasure of working with this web design company, and I cannot say enough good things about them! I was so impressed with their level of professionalism and the quality of their work. They provided me with a beautiful, modern website that was easy to navigate and met all of my business needs. I would absolutely recommend them to anyone looking for a web design company.</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>Izzoh</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>I had a great experience with this web design company. The team was prompt and professional, and they provided me with an amazing website that was easy to manage and looked great. They even gave me helpful advice and tips on how to make the most of my website. I would definitely recommend them to anyone looking for an excellent web design company.</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Mary </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>I recently worked with this web design company, and I am so pleased with the results! They provided me with a stunning website that was easy to use and navigate. The team was friendly and helpful throughout the entire process, and I was able to get the exact website I wanted in no time. I would highly recommend them to anyone looking for a web design company.</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>paul deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <form action="" method="POST">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <div class="inputBox">
                <span class="fas fa-pen"></span>
                <input type="text" placeholder="Subject">
            </div>
            <div class="inputBox">
                <span class="fas fa-pen"></span>
                <input type="text" placeholder="Message">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Web Design Ledger</a>
                <span>by admin / 1st november, 2022</span>
                <p>The Web Design Ledger blog is a great resource for web designers, developers, and entrepreneurs. From tutorials and tips to news and trends, our blog is full of helpful information to help you make the most of your website and online presence. We cover topics such as web design, development, SEO, content marketing, and more. Our goal is to provide the latest insights and advice so that you can stay ahead of the curve and build an amazing website. Whether you're just getting started or an experienced web professional, our blog has something for everyone.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">CSS Tricks</a>
                <span>by admin / 30st june, 2022</span>
                <p>
                    Welcome to the CSS Tricks Blog! Here you’ll find a wealth of resources, tips, and tricks to help you design effective and beautiful websites. From HTML and CSS basics to advanced techniques and tools, we’ll provide you with the tips and tricks you need to get up to speed with the latest trends in web design. Whether you’re a beginner or an experienced web designer, you’ll find something useful here. We’ll be discussing everything from basic coding techniques to advanced tools and tricks. We’ll also be exploring the latest trends in web design, including responsive design, mobile-first design, and more. We’ll also be showcasing some of the best designers and developers out there and offering up their tips and tricks for success. We’ll also be keeping you updated on the latest news and events in the web design world.
                    So tune in often and start learning the tricks of the trade from the pros. We look forward to seeing you here!</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Design Shack</a>
                <span>by admin / 21st march, 2022</span>
                <p>Welcome to the Design Shack blog!

                    We’re here to share with you everything related to web design, from the basics to the more advanced topics. Whether you’re a beginner or a pro, we’ll have something for you! We’ll talk about the latest trends in web design, how to create great-looking websites, and tips for making your designs stand out. We’ll also discuss the technical aspects of web design, such as HTML, CSS, and JavaScript.
                    We’ll also be providing tutorials and resources that will help you learn and improve your web design skills.Finally, we’ll also be discussing the best tools and services available to help you create awesome websites.
                    Thanks for visiting the Design Shack blog! We hope you’ll find our content helpful and informative. Don’t hesitate to reach out if you have any questions or comments.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

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