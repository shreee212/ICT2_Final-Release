<?php

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $username = $_POST['username'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

$connection = mysqli_connect('localhost','ictatjcu_indoauz','Indoauz2020','ictatjcu_indoauz');
if(!$connection)
{
    die('database error');
    echo "<br>";
}
$username = mysqli_real_escape_string($connection, $username);
$email = mysqli_real_escape_string($connection,$email);
$subject = mysqli_real_escape_string($connection,$subject);
$message = mysqli_real_escape_string($connection,$message);

$query = "INSERT INTO contact(username,email,subject,message) ";
$query .= "VALUES('$username','$email','$subject','$message')";

$result = mysqli_query($connection,$query);

if(!$result){

die('query failed'.mysqli_error());
}else{

    echo "<h5 style='color:green;'>*You Message Has Been Sent*<h5>";
}
}

?>




<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Indo AUZ International</title>
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/responsee.css">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="css/lightcase.css">

    <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/template-style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext"
    rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body class="size-1280">

  <!-- HEADER -->
  <header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
      <!-- mobile version logo -->
      <div class="logo hide-l hide-xl hide-xxl">
        <a href="index.php" class="logo">
          <!-- Logo Dark Version -->
          <img class="logo-dark" src="img/logo-dark.png" alt="">
        </a>
      </div>

      <div class="top-nav">

        <!-- left menu items -->
        <div class="top-nav left-menu">
          <ul class="right top-ul chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li>
              <a href="services.php">Our Services</a>
              <ul>
                <li><a href="services-copy.php">Find a Course</a></li>
            </ul>
            </li>
            <li><a href="testimonials.php">Testimonials</a></li>
          </ul>
        </div>

        <!-- logo -->
        <ul class="logo-menu">
          <a href="index.php" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logo-dark.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.png" alt="">
          </a>
        </ul>

        <!-- right menu items -->
        <div class="top-nav right-menu">
          <ul class="top-ul chevron">
            <li>
              <a>Countries We Offer</a>
              <ul>
                <li><a href="countries.php">Australia</a></li>
                <li><a href="countries-canada.php">Canada</a></li>
            </ul>
            </li>

            <li><a href="contact.php">Contact</a></li>
            <li>
              <a>More</a>
              <ul>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="galery.php">Gallery</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- MAIN -->
  <main role="main">
    <article>
      <!-- Header -->
      <header class="section background-image text-center" style="background-image:url(img/img-05.png)">
        <h1
          class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
          Reach Out To Us
        </h1>


        <!-- white full width arrow object -->
        <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
      </header>

      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center">
        <div class="line">
          <i class="icon-sli-heart text-primary text-size-40"></i>
          <h2 class="text-dark text-size-50 text-m-size-40">We are here for you <b class="text-primary">24/7</b></h2>
        </div>
      </section>

      <!-- Section 2 -->
      <section class="full-width background-grey">
        <div class="m-12 l-6">
          <div class="padding-3x">
            <div class="margin2x">

              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">Company Address</h2>
                  <p>Suite 3.18, 433 Logan Road, Greenslopes,</p>
                  <p>4120, Australia.</p>
                </div>
              </div>

              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>
                  <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com"> visa@yalemigration.com.au</a>
                  </p>
                  <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">info@yalemigration.com.au</a>
                  </p>
                </div>
              </div>

              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">Phone Numbers</h2>
                  <p>+61 733948330</p>
                  <p>+91 9914397373</p>
                  <p>+91 9033910007</p>
                </div>
              </div>


            </div>
          </div>
        </div>
       
        <div class="m-12 l-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.96390695923!2d153.04379621456897!3d-27.50149792463916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a5b3f2cd867%3A0xf2723c8c21b33bf4!2s433%20Logan%20Rd%2C%20Greenslopes%20QLD%204120!5e0!3m2!1sen!2sau!4v1600490304404!5m2!1sen!2sau"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </section>

      <!-- Section 3 -->
      <section class="section background-dark">
        <div class="s-12 m-12 l-4 center">
          <h3 class="text-size-30 margin-bottom-40 text-center"><b>Contact Form</b></h3>
          <form action="contact.php" class="customform text-white" method="post" enctype="multipart/form-data">
            <div class="line">
              <div class="margin">
                <div class="s-12 m-12 l-6">



                  <input name="email" class="required email" name="email" placeholder="Your e-mail" title="Your e-mail"
                    type="text" />
                </div>
                <div class="s-12 m-12 l-6">
                  <input class="name" name="username" placeholder="Your name" title="Your name" type="text" />
                </div>
              </div>
            </div>

            <div class="line">
              <div class="s-12">
                <input name="subject" class="required subject" name="subject" placeholder="Subject" title="Subject" type="text" />
              </div>
              <div class="s-12">
                <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
              </div>
              <div class="s-12"><button class="button border-radius text-white background-primary" type="submit" name="submit">Submit
                  Button</button></div>
            </div>
          </form>
        </div>
      </section>
    </article>
  </main>



  <!-- FOOTER -->
  <footer>
    <!-- Social -->
    <div class="background-primary padding text-center">
      <a href="https://www.facebook.com/VisaServicesIndoAuzInternational"><i
          class="icon-facebook_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>
    </div>
    <!-- Main Footer -->
    <section class="section background-dark">
      <div class="line">
        <div class="margin2x">
          <div class="s-12 m-6 l-3 xl-5">
            <h4 class="text-white text-strong">Our Mission</h4>
            <p>
              To enable students to <b class="text-size-20">achieve their dreams and reach
                their potential </b> in whatever they aim to do and stand firm
              in our commitment of
              <b class="text-size-20">offering top notch guidance and </b>support to students wishing to study abroad.
            </p>
          </div>
          <div class="s-12 m-6 l-3 xl-2">
            <h4 class="text-white text-strong margin-m-top-30">Useful Links</h4>
            <a class="text-primary-hover" href="index.php">Home</a><br>
            <a class="text-primary-hover" href="about-us.php">About Us</a><br>
            <a class="text-primary-hover" href="contact.php">Contact Us</a><br>
          </div>
          <div class="s-12 m-6 l-3 xl-2">
            <h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
            <a class="text-primary-hover" href="page.php">Terms and Conditions</a><br>
            <a class="text-primary-hover" href="page.php">Refund Policy</a><br>
            <a class="text-primary-hover" href="page.php">Disclaimer</a>
          </div>
          <div class="s-12 m-6 l-3 xl-3">
            <h4 class="text-white text-strong margin-m-top-30">Contact Us</h4>
            <p><i class="icon-sli-screen-smartphone text-primary"></i> +91 9914397373</p>
            <a class="text-primary-hover" href="mailto:contact@sampledomain.com"><i
                class="icon-sli-mouse text-primary"></i> contact@indoauz.com</a><br>
            <a class="text-primary-hover" href="mailto:office@sampledomain.com"><i
                class="icon-sli-mouse text-primary"></i> inquiry@indoauz.com</a>
          </div>
        </div>
      </div>
    </section>
    <div class="background-dark">
      <div class="line">
        <hr class="break margin-top-bottom-0" style="border-color: #777;">
      </div>
    </div>
    <!-- Bottom Footer -->
    <section class="padding-2x background-dark full-width">
      <div class="line">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2020, Indo-AUZ International Migration.</p>
          
        </div>
        <div class="s-12 l-6">
          <a class="right text-size-12 text-primary-hover" href="http://www.myresponsee.com"
            title="Responsee - lightweight responsive framework">Design and coding<br> by ICT-1 Group 4.</a>
        </div>
      </div>
    </section>
  </footer>
  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="js/template-scripts.js"></script>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/600a2e75a9a34e36b96f0a7f/1esjsavc0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>

</html>
