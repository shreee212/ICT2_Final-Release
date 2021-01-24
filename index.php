<?php

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['psw'];
  $repeat = $_POST['psw_repeat'];

//print_r($_POST);
//    exit();
$connection = mysqli_connect('localhost','ictatjcu_indoauz','Indoauz2020','ictatjcu_indoauz');
if(!$connection)
{
    die('database error');
    echo "<br>";
}
$email = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection, $password);
$repeat = mysqli_real_escape_string($connection,$repeat);

 $p= md5($password);
$pr = md5($repeat);

if($p==$pr){

     $query=  "INSERT INTO `details` (`email`, `password`, `password-repeat`) VALUES ('$email', '$p', '$pr')";


$result = mysqli_query($connection,$query);

if(!$result){

die('query failed'.mysqli_error());
}else {

   echo "<h5 style='color:green'>*Signup Successfull*</h5>";

}

} else {

    echo "<h5 style='color:red'>*Password Do Not Match*</h5>";

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
    <!-- Header -->
    <header class="section-top-padding background-image text-center margin-top-20" style="background-image:url(img/img-05.png)">
      <h1
        class="text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-40 margin-top-130">
        IndoAuz Group - Immigration Agents & Education Consultants
      </h1>
      <p class="text-white">Indo Auz International are Education and Immigration Consultants and one of the pioneers in
        providing assistance to students who wish to pursue their education abroad. Along with Education, Indo Auz also
        specialises in holiday packages for friends and family.</p>
      <i class="slow icon-sli-arrow-down text-white margin-top-20 text-size-16"></i>

      <!-- Image-->
      <img class="margin-top-20 center" src="img/app.png" alt="">

      <!-- dark full width arrow object-->
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>

    <!-- Section 1
    <section class="section-small-padding background-dark text-center">
      <div class="line">
        <div class="m-10 l-6 xl-4 center">
          <div class="margin">
            <a class="s-12 m-6 margin-s-bottom" href="/">
              <img class="full-img right" src="img/google-play.svg" alt="">
            </a>
            <a class="s-12 m-6" href="/">
              <img class="full-img" src="img/app-store.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>-->

    <!-- form -->




    <!-- Section 2 -->
    <section class="section-top-padding background-white">
      <div class="line text-center">
        <i class="icon-sli-heart text-primary text-size-40"></i>
        <h2 class="text-dark text-size-50 text-m-size-40">Our Other <b>Services</b></h2>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div>
      <div class="line">
        <div class="margin2x">
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="float-left">
              <i class="icon-sli-equalizer text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">5 Star Reviews</h3>
              <p>With over 3000 happy customers in Australia, their satisfaction, has made us (Indo-AUZ Group) gain over
                2800+ '5-Stars' ratings & reviews on Social Media platforms.</p>
              <a class="text-more-info text-primary" href="services.php">Read more</a>
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="float-left">
              <i class="icon-sli-layers text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Best Consultation</h3>
              <p>Our team of experts leaves back no points in taking ahead the client's case against the legislation,
                providing him/her with an utter satisfaction.</p>
              <a class="text-more-info text-primary" href="services.php">Read more</a>
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-bottom-60">
            <div class="float-left">
              <i class="icon-sli-share text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">PERSONALISED SERVICE</h3>
              <p>We offer the best from our end, guaranteeing a stress-free environment for you and your family in
                regards for any of your visa to <strong>Australia.</strong></p>
              <a class="text-more-info text-primary" href="services.php">Read more</a>
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-m-bottom-60">
            <div class="float-left">
              <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">OVERSEAS HEALTH INSURANCE</h3>
              <p>Concerning healthcare, getting an OSHC for Australia is as important as it gets. Compare and buy
                between different plans and know what you pay for, get on the spot quotes etc. depending on the type of
                your visa cover.</p>
              <a class="text-more-info text-primary" href="services.php">Read more</a>
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-m-bottom-60">
            <div class="float-left">
              <i class="icon-sli-diamond text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Online IELTS test practice</h3>
              <p>Prepare for IELTS with our expert coaches, and achieve your desired band score. Don't let a below-par
                IELTS score be a hindrance to your dreams of studying/working abroad.</p>
              <a class="text-more-info text-primary" href="services.php">Read more</a>
            </div>
          </div>
          <div class="s-12 m-6 l-4 margin-m-bottom-60">
            <div class="float-left">
              <i class="icon-sli-rocket text-primary text-size-40 text-line-height-1"></i>
            </div>
            <div class="margin-left-60">
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">And many more...</h3>
              <p>Our main focus is client satisfaction and thus our talented and skillful staff will assist you at each
                and every step. Take that first step and come to us and we will take care of the other stuffs. Promise!
              </p>
              <a class="text-more-info text-primary" href="services.php">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3 -->
    <section class="section background-white">
      <div class="line text-center">
        <h2 class="text-dark text-size-50 text-m-size-40">Our Satisfied <b>Clients</b></h2>
        <i class="icon-chevron_down text-primary margin-bottom-50 text-size-20"></i>
      </div>

      <div class="l-12 xl-7 center">
        <div class="margin">
          <!-- Left Column -->
          <div class="s-12 m-12 l-4 text-right">
            <div class="margin-right-50">
              <i class="icon-sli-paper-plane text-primary text-size-40 margin-bottom-20"></i>
              <div style="background-image:url(../img/mundi_img.jpg)" class="et_pb_testimonial_portrait"></div>
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Name: Avtar Singh Mundi</h3>
              <p>Course: Bachelor Of Engineering Mechanical Honours.

                AUSTRALIA</p>
            </div>

            <div class="line">
              <hr class="break background-primary break-small right margin-top-bottom-40">
            </div>

            <div class="margin-right-50">
              <i class="icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Name: Harnoor Kaur</h3>
              <p>Course: Bachelor Of Nursing


                AUSTRALIA</p>
            </div>
          </div>

          <!-- Middle Column (carousel)-->
          <div class="s-12 m-12 l-4">
            <div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-50">
              <div class="item">
                <img src="img/responsive-01.png" />
              </div>
              <div class="item">
                <img src="img/responsive-02.jpg" />
              </div>
              <div class="item">
                <img src="img/responsive-03.jpg" />
              </div>
              <div class="item">
                <img src="img/responsive-04.jpg" />
              </div>
            </div>
          </div>

          <!-- Right Column -->
          <div class="s-12 m-12 l-4">
            <div class="margin-left-50">
              <i class="icon-sli-heart text-primary text-size-40 margin-bottom-20"></i>
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Name: Manvir Singh</h3>
              <p>Course: Bachelor Of Business

                AUSTRALIA</p>
            </div>

            <div class="line">
              <hr class="break background-primary break-small margin-top-bottom-40">
            </div>

            <div class="margin-left-50">
              <i class="icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
              <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Name: Guru Singh</h3>
              <p>Course: Bachelor Of Nursing

                AUSTRALIA</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<br><div class="line text-center ">
  <i class="icon-sli-heart text-primary text-size-40"></i>
</div>
    <!--member button-->
    <!--<section class="section-small-padding background-white text-center">-->
      <div class="line text-center">
    <h2 class="text-strong text-size-20 text-line-height-1 margin-bottom-10">Become Our Member</h2>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="index.php" method="post">
        <div class="container">


          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw_repeat" required>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
           <button class="button border-radius text-white background-primary" type="submit" name="submit">Sign Up</button>

          </div>
        </div>
      </form>


    </section>

<hr class="break background-primary break-small break-center margin-bottom-50">

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    </script>
    </div>


    <!-- Section 4 -->
    <section class="background-primary full-width">
      <div class="m-12 l-6 xl-5 xxl-4">
        <img class="full-img" src="img/output.png" />
      </div>
      <div class="m-12 l-6 xl-7 xxl-8">
        <div class="l-12 xl-11 xxl-8 padding-2x">
          <h2 class="text-l-size-40 text-size-50 text-white">Always <b>Nearby</b></h2>
          <p class="margin-bottom">At Indo-AUZ we believe that our clients success is our success. We are just a phone
            call away. Contact today and give us the opportunity to give our best serivces to you. <br> With a team of
            expert counsellors, deeply understand the requirements of a client to whatever extent
            it could take-from mitigating visa risks to enabling individuals to seek Australia Permanent Residency. We
            analyse the complete profile of a client, take into consideration their accolades and compare it with the
            criteria that have been set by authorities, thus helping them with their visa. If a client wants to migrate
            to Australia, there has never been a better option than Aussizz Group. We help clients who wish to study,
            work or settle in Australia, have a dream of immigrating to Australia or seek Permanent Residency.</p>

        </div>
      </div>
    </section>

    <!-- Section 5 -->
    <section class="section-small-padding background-grey">
      <div class="line-full-width">
        <div class="margin2x">
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-1.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-2.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-3.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-1.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-4.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-5.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-3.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-1.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-5.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-4.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-1.png" />
          </div>
          <div class="m-6 l-1">
            <img class="margin-bottom" src="img/logo-2.png" />
          </div>
        </div>
      </div>
    </section>

    <!-- Section 7 -->
    <section class="section-small-padding background-dark text-center">
      <div class="line">
        <h2 class="text-white text-size-50 text-m-size-40 margin-bottom-20">You Can Also <b>Download Our App</b>
        </h2>
        <div class="m-10 l-6 xl-4 center">
          <div class="margin">
            <a class="s-12 m-6 margin-s-bottom" href="/">
              <img class="full-img right" src="img/google-play.svg" alt="">
            </a>
            <a class="s-12 m-6" href="/">
              <img class="full-img" src="img/app-store.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer>

    <!-- Social -->
    <div class="background-primary padding text-center">
      <a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook_circle text-size-25 text-dark"></i></a>
      <a href="https://twitter.com/?logout=1604639159772" target="_blank"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="icon-instagram_circle text-size-25 text-dark"></i></a>
      <a href="https://www.linkedin.com/" target="_blank"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>
    </div>
    <!-- Main Footer -->
    <section class="footer-section background-dark">
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
            <a class="text-primary-hover" href="contact.php">Contact Us</a><br>
            <a class="text-primary-hover" href="blog.php">Blog</a>
          </div>
          <div class="s-12 m-6 l-3 xl-2">
            <h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
            <a class="text-primary-hover" href="terms.php">Terms and Conditions</a><br>
            <a class="text-primary-hover" href="terms.php">Disclaimer</a>
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
          <p class="text-size-12">Copyright 2020, Indo-AUZ Group</p>

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
