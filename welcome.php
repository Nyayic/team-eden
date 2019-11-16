<?php
require_once "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The  &mdash; Sumatran Rhino</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/form.css">


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section" class="bg">

<div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-success" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


<!--site wrap-->
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

<div class="container">
  <div class="row align-items-center">
    
  <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo">
              <a href="index.php" class="h2 mb-0">
              <strong>Sumatran</strong><span class="text-success">Rhino.</span> 
              </a>
            </h1>
          </div>

    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
          <!--li><a href="#home-section" class="nav-link">Home</a></li>
          <li><a href="#about-section" class="nav-link">About</a></li>
          <li><a href="#trainers-section" class="nav-link">Doctor</a></li>
          <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
          <li><a href="#blog-section" class="nav-link">Blog</a></li-->
          <li><a href="#adopt-section" class="nav-link">Adopt a Rhino</a></li>
          <li><a href="#contact-section" class="nav-link">Contact</a></li>
        </ul>
      </nav>
    </div>


    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
      <a href="#" class="site-menu-toggle js-menu-toggle float-right">
        <span class="icon-menu h3"></span>
      </a>
    </div>

  </div>
</div>

</header>

<section class="site-blocks-cover overflow-hidden bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mr-auto align-self-center text-center text-md-center">
            <!--h1 style="font-size:45px">Find your Inner <span class="text-success">Sumatran</span>  Rhino</h1>
                <div class=""  style="margin-top:0px">
                    <h2>Find your Inner <span class="text-success">Sumatran</span>  Rhino</h2-->
                    
                <!--emne-->
                <iframe src="quiz/index.php" height="450" width="600"></iframe>

                </div>
            </div>
        </div>
    </div>
</section>



<!--adopt section-->
<section class="site-section" id="adopt-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            
            <h2 class="text-black mb-2">Adopt a <strong class="text-success">Sumatran</strong> Rhino</h2>
            <p> You may choose to adopt any of the seven rhinos at the SRS, either in your own name, 
            or as a gift for a relative or friend who supports wildlife conservation.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="#"><img src="images/Andalas-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">ANDALAS</a></h3>
                <!--span class="post-meta mb-3 d-block">April 17, 2019</span-->
                <p>Andalas, the first Sumatran rhino (Dicerorhinus sumatrensis) born in captivity in more than 112 years, 
                  is the living, breathing result of a ground-breaking research and breeding effort 
                  undertaken by American zoos, the Indonesian government, and the Sumatran Rhino Sanctuary.
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Andatu-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">ANDATU</a></h3>
                <p>
                  Andatu was born early in the morning on Saturday, June 23, 2012 at the Sumatran Rhino Sanctuary in Way
                   Kambas National Park, Indonesia. His father, Andalas, 
                  was born at the Cincinnati Zoo on September 13, 2001 and came to Indonesia when he was six years old.</p>
                <!--p><a href="#" class="">Read More..</a></p-->
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Andatu-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">BINA</a></h3>
      
                <p>Bina, estimated to have been born around 1985, is one of the last Sumatran rhinos to be captured and relocated within Indonesia. Named after her original home, 
                  Bina used to live in an area of southern Sumatra called Bina Samakta, located in Bengkulu province. </p>
        
              </div>
            </div>
          </div>

      
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Delilah-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">DELILAH</a></h3>
                
                <p>Delilah was born in the early morning hours of Thursday, May 12th, 2016 at the Sumatran Rhino Sanctuary in Way Kambas National Park, Indonesia. Her father, Andalas, 
                  was born at the Cincinnati Zoo on September 13, 2001 and came to Indonesia when he was six years old.</p>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Harapan-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">HARAPAN</a></h3>
      
                <p>Harapan, a young male Sumatran rhino, was born at the Cincinnati Zoo in 2007 to mother Emi and father Ipuh. His parents were part of an international breeding program developed to increase the population of the 
                  critically endangered Sumatran rhino – now numbering no more than 100 individuals in the wild. </p>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Ratu-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">RATU</a></h3>
      
                <p>Unlike the other rhinos at the Sumatran Rhino Sanctuary, Ratu (whose name means “queen”) was actually born around the year 2000 in Way Kambas National Park, the protected area where the sanctuary is located. On September 20, 2005, rangers received reports that a 
                  Sumatran rhino – Ratu – was spotted in Braja Asri village around 4:00 am.</p>
                
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Rosa-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">ROSA</a></h3>
      
                <p>Unlike most Sumatran rhinos, Rosa, a young female, exhibits none of the shy, solitary behavior normally associated with her species. Beginning in late 2003, Rhino Protection Units (RPUs) working in Bukit Barisan Selatan National Park began receiving reports from local villagers that a young Sumatran rhino had frequently been observed walking along one of 
                  the main roads crisscrossing the park and browsing for vegetation in villages around the park boundaries.</p>
  
              </div>
            </div>
          </div>


          <!--div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/Andatu-2018.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h5>For each adoption you will receive:</h5>
                    <ul>
                      <li>A digital certificate</li>
                      <li>A photo of your adopted rhino to share on social media</li>
                      <li>A bio on your adopted rhino</li>
                    </ul>
      
              </div>
            </div>
          </div-->


        </div>
      </div>
    </section>


</<div> <!--site wrap-->





<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
</body>
</html>