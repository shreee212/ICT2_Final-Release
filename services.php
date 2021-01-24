<?php

if(isset($_POST['submit'])){

  $username = $_POST['yourname'];
  $email = $_POST['email'];
  $date = $_POST['bookingdate'];
  $time = $_POST['exacttime'];
    $people = $_POST['people'];

$connection = mysqli_connect('localhost','ictatjcu_indoauz','Indoauz2020','ictatjcu_indoauz');
if(!$connection)
{
    die('database error');
    echo "<br>";
}
    
$query = "INSERT INTO `service` (`username`, `email`, `bookingdate`, `exacttime`, `people`) VALUES ('$username', '$email', '$date', '$time', '$people') ";

$result = mysqli_query($connection,$query);
  
if(!$result){

die('query failed'.mysqli_error());
}else{

    echo "<h5 style='font-family:cursive; color:green;'>*You Message Has Been Sent*<h5>";
}
}

?>












<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Indo-AUZ International Migration Services</title>
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/responsee.css">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="css/lightcase.css">

  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/template-style.css">
  <link rel="stylesheet" href="css/bookingstyle.css">
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
          Our Services
        </h1>
        <p class="animated-element text-white">We Excel in Providing World Class Services To Our Client</p>

        <!-- white full width arrow object -->
        <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
      </header>

      <!-- Section 1 -->
      <section class="footer-section background-white">
        <div class="line">
          <div class="margin2x">

            <div class="m-12 l-6 margin-bottom-60">
              <div class="float-left">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Student Visa</h3>
                <p>
                  Australia has been popular study destination for international students.
                  It has eight of the top 100 universities in the world that offer more than 22000 courses across 1100
                  institutions.
                  The country also boasts five of the 30 best student cities in the world, which includes Melbourne,
                  Sydney, Perth, Brisbane, Adelaide and Tasmania.</p>

                  <p class="text-padding-small background-primary text-white s-12 margin-top-bottom-20"> APPLY FOR
                    STUDENT VISA TODAY AND EXCEL YOUR CAREER TODAY!</p>

                  <p>Along with Australia we also provide study visa for Canada.Canada is renowned for a life outside
                  campus too.
                  Whether the interest lies in exploring nature or wildlife, spending alone time or outdoors, one
                  doesn't have to cover long distance looking for these activities.
                  From the big skies of prairies to the rugged hills and mesmerising coastline of the Atlantic Provinces
                  to the magnificent Rocky Mountains of Alberta and Niagara Falls, Canada has plethora of natural beauty
                  to offer.
                </p>
              </div>
            </div>

            <div class="m-12 l-6 margin-bottom-60">
              <div class="float-left">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Spouse Visa</h3>
                <p>
                  If you or your partner are looking to move to Australia on a partner visa, this information is a MUST
                  for you. At Indo-AUZ, we can help you successfully apply for a partner visa in Australia.
                  A partner visa may be the perfect solution for you and your spouse.
                  However, applying without proper advice can risk your time together, and a rejected visa can cost you
                  thousands in application fees.</p>

                  <p class="text-padding-small background-primary text-white s-12 margin-top-bottom-20">APPLY FOR SPOUSE
                    VISA TODAY!</p>

                  <p>Are you a citizen or permanent resident or work permit holder in Canada wanting to bring your
                  dependents to Canada?
                  To facilitate families to live together, the Government of Canada allows eligible residents above the
                  age of 18
                  to sponsor dependent spouses, children, parents, partners, and
                  grandparents to live with them in Canada.
                  Indo-AUZ can help you reunite with your family with our dedicated Canada dependent visa services.
                </p>
              </div>
            </div>

            <div class="m-12 l-6 margin-bottom-60">
              <div class="float-left">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Visitor Visa</h3>
                <p>
                  Unless you are an Australian or New Zealand citizen, you will need a valid Australian visa to enter
                  the country.
                  New Zealand passport holders can apply for a visa upon arrival in the country.
                  All other passport holders must apply for a visa before leaving home.
                  You can apply for a range of visas, including tourist visas and working holiday visas,
                  at your nearest Australian Embassy or Consulate.
                  You can also apply for certain types of visas on the Australian Department of Home Affairs website.</p>

                  <p class="text-padding-small background-dark text-white s-12 margin-top-bottom-20">APPLY FOR VISITOR
                    VISA TODAY!</p>

                  <p>Also known as temporary resident visa, Canada Tourist Visa is an official document stuck in the
                  passport showing that the individual meets the requirements needed to enter Canada for a particular
                  period of time (generally 6 months).

                  Most travellers need a visitor visa to travel to Canada. It can be applied online or on paper. Canada
                  tourist visas are of two types – Single entry visa and multiple entry visa.
                </p>
              </div>
            </div>

            <div class="m-12 l-6 margin-bottom-60">
              <div class="float-left">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Canada Express Entry</h3>
                <p>
                  Canada introduced the Express Entry system in January 2015. Those who have one year of skilled work
                  experience are eligible to apply to migrate to Canada under this program leading to Permanent
                  Residency.
                  It is a great opportunity for those looking to work & settle in Canada. We encourage applicants to
                  apply immediately while this program is open.</p>

                  <p class="text-padding-small background-dark text-white s-12 margin-top-bottom-20">APPLY FOR CANADA
                    EXPRESS ENTRY TODAY!</p>

                <p>Canada has issued more than 70,000 invitations to apply (ITA’s) under Express Entry draws in 2020.
                  This illustrates Canada's commitment to meeting the immigration targets of 1 Million + immigrants in
                  2020 to 2022, despite the pandemic.
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </article>

    <!--Booking Consultation-->

    <div class="booking-container">
      <div class="container-time">
      <h2 class="heading-1">Time Open</h2>
      <h3 class="heading-days">Monday-Friday</h3>
      <p>7am - 10pm</p>


      <h3 class="heading-days">Saturday and sunday</h3>
      <p>9am - 10pm (Only via call!)</p>


      <hr>

      <h4 class="heading-phone">Call Us: +61 733948330</h4>
      </div>

      <div class="booking-container-form">
      
      
    <!--Consultation Form -->
      
      
      <form action="services.php" method="post">
      <h2 class="heading heading-yellow">Book a Consultation</h2>

      <div class="form-field-1">
      <p>Your Name </p>
      <input type="text" name="yourname" placeholder="Your Name">
      </div>
      <div class="form-field-1">
      <p>Your email </p>
      <input type="email" name="email" placeholder="Your email">
      </div>
      <div class="form-field-1">
      <p>Date</p>
      <input name="bookingdate" type="date">
      </div>
      <div class="form-field-1">
      <p>Time</p>
      <input name="exacttime" type="time">
      </div>
      <div class="form-field-1">
      <p>How many people?</p>
      <select name="people" id="#">
      <option value="1">1 person</option>
      <option value="2">2 persons</option>
      <option value="3">3 persosn</option>
      <option value="4">4 persons</option>
      <option value="5">5 persons</option>
      <option value="5+">5+ persons</option>
      </select>
      </div>

      <button type="submit" name="submit" value="submit" class="btn">Submit</button>
      </form>
      
       <!--Consultation Form -->
      
      </div>
      </div>


    <!-- Section 2 -->
    <section class="footer-section background-dark">
      <div class="line text-center">
        <i class="icon-sli-heart text-primary text-size-40"></i>
        <h2 class="text-size-50 text-m-size-40"><b>Satisfied</b> Clients</h2>
        <hr class="break background-primary break-small break-center margin-bottom-50">
      </div>
      <div class="line">
        <div class="carousel-default owl-carousel carousel-wide-arrows">
          <div class="item">
            <div class="s-12 m-12 l-7 center text-center">
              <div class="text-primary margin-bottom"><i class="icon-star text-size-12"></i> <i
                  class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i
                  class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i></div>
              <p class="margin-bottom">All the staffs of Indo-AUZ are so friendly and cooperative. We had a very good
                business with them and I surely recommended them to all my other business associates.
                These guys won't discourage you.
              </p>
              <p class="text-primary text-size-16"><strong>Harpreet Kaur</strong> / Student Visa / CANADA</p>
            </div>
          </div>
          <div class="item">
            <div class="s-12 m-12 l-7 center text-center">
              <div class="text-primary margin-bottom"><i class="icon-star text-size-12"></i> <i
                  class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i
                  class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i></div>
              <p class="margin-bottom">All the staffs of Indo-AUZ are so friendly and cooperative. We had a very good
                business with them and I surely recommended them to all my other business associates.
                These guys won't discourage you.
              </p>
              <p class="text-primary text-size-16"><strong>Jaswinder Kaur</strong> / Spouse Visa / AUSTRALIA</p>
            </div>
          </div>
          <div class="item">
            <div class="s-12 m-12 l-7 center text-center">
              <div class="text-primary margin-bottom"><i class="icon-star text-size-12"></i> <i
                  class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i> <i
                  class="icon-star text-size-12"></i> <i class="icon-star text-size-12"></i></div>
              <p class="margin-bottom">All the staffs of Indo-AUZ are so friendly and cooperative. We had a very good
                business with them and I surely recommended them to all my other business associates.
                These guys won't discourage you.</p>
              <p class="text-primary text-size-16"><strong>Kavita Bhatt</strong> / Work Visa / AUSTRALIA</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 4 -->
    <section class="section-small-padding background-white text-center">
      <div class="line">
        <div class="s-12 m-12 l-9 center margin-bottom-30">
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-10">Take That First Step!</h3>
          <p>Contact our staff today or visit us at your nearest branch.</p>
        </div>
      </div>
      <div class="line">
        <div class="s-12 m-12 l-3 center">
          <a href="contact.php" class="s-12 button border-radius background-primary text-size-20 text-white">Contact
            Us</a>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <!-- Social -->
    <div class="background-primary padding text-center">
      <a href="/"><i class="icon-facebook_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-google_plus_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a>
      <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>
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
            <a class="text-primary-hover" href="mailto:contact@indoauz.com"><i class="icon-sli-mouse text-primary"></i>
              contact@indoauz.com</a><br>
            <a class="text-primary-hover" href="mailto:inquiry@indoauz.com"><i class="icon-sli-mouse text-primary"></i>
              inquiry@indoauz.com</a>
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
            title="Responsee - lightweight responsive framework">Design and coding by<br> ICT-1 Group 4.</a>
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
