<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./images/logo1.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link rel="stylesheet" href="./css/help.css" />
    <link rel="stylesheet" href="./css/nav.css" />
   
    <title>Contact- Passionweb</title>
  </head>
  <body>
    <section class="contact-main">
      
        <div class="logo">
          <img src="./images/logo1.png" alt="hosting" />
          <a href="help.php">Passionweb</a>
        </div>
<nav>
        <i class="fa fa-bars" aria-hidden="true"></i>

        <ul>
          <i class="fa fa-times" aria-hidden="true"></i>
          <li><a href="home.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="home.php?#blogs">Blogs</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="login.php?logout.php">Log Out</a></li>
        </ul>
      </nav>

      <div class="contact-main-text">
        <h1>Our teams are here to help</h1>
        <p>
          Get in touch and let us know how we can help. We’ll help you combine
          the flexibility of the modern web with the control and compliance your
          business needs.
        </p>
        <a href="#contact">Need help?</a>
      </div>
    </section>

    <section class="contact-form" id="contact">
      <h1>Contact our team directly</h1>
      <form action=" " method="POST">
        <input type="text" name="fname" placeholder="First name" required />
        <input type="text" name="lname" placeholder="Last name" required />
        <input type="email" name="email" placeholder="Email address" required />
        <input type="text" name="phone" placeholder="Phone" required />
        <input
          type="text"
          name="company"
          placeholder="Company/organization"
          required
        />
        <textarea
          name="query"
          id=""
          cols="30"
          rows="5"
          placeholder="Project details or questions"
        ></textarea>

        <button type="submit">Submit</button>
      </form>

      <div class="social-medias">
        <h3>& contact us on social media</h3>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
          <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
          <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
          <li><a href="#"><i class="fa fa-youtube"></i>YouTube</a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
          <li><a href="mailto:info@passionweb.ac.ke"><i class="fa fa-envelope"></i>Email</a></li>
        </ul>
      </div>
    </section>
    <div class="copyright">
      &copy; All rights reserved by Passionweb
    </div>

    <script src="./js/navbar.js"></script>
  </body>
</html>
