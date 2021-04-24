<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZMQD0VY56N"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZMQD0VY56N');
      </script>
      <title>COVID-19 Plasma Donation</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="description" content="Your contribution may help save a life, come forward and donate your plasma.">
      <meta name="title" content="COVID-19 Plasma Donation." />
      <link rel="canonical" href="https://www.getplasma.store/">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="images/favicon_icon.png">

      <!-- open graph tags -->   
      <meta property="og:title" content="COVID-19 Plasma Donation" />
      <meta property="og:image" content="https://www.getplasma.store/images/favicon_icon.png" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="https://www.getplasma.store/" />
      <meta property="og:description" content="Your contribution may help save a life, come forward and donate your plasma." />
    
      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://www.getplasma.store/">
      <meta property="twitter:title" content="COVID-19 Plasma Donation">
      <meta property="twitter:description" content="Your contribution may help save a life, come forward and donate your plasma">
      <meta property="twitter:image" content="https://www.getplasma.store/images/favicon_icon.png">

      <!--<Preload critical font> -->
  	   <link rel="preload" href="fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" type="font/woff2" crossorigin>

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/datepicker.css">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="css/templatemo-style.css">

      <style>
         .plasma_resources h3 a {
            color:#29ca8e;
         }
      </style>
   </head>
   <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
      <!-- PRE LOADER -->
      <section class="preloader">
         <div class="spinner">
            <span class="spinner-rotate"></span>
         </div>
      </section>
      <!-- MENU -->
      <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon icon-bar"></span>
               <span class="icon icon-bar"></span>
               <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO TEXT HERE -->
               <a href="#top" class="navbar-brand">Get Plasma</a>
            </div>
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                  <li><a href="#who_can_donate" class="smoothScroll">Who Can Donate</a></li>
                  <li><a href="#find_services" class="smoothScroll">Find a Donor</a></li>
                  <li><a href="#plasma_resources" class="smoothScroll">Plasma Donate</a></li>
                  <li><a href="#find_services" class="smoothScroll">Oxygen Cylinder</a></li>
               </ul>
            </div>
         </div>
      </section>
      <!-- HOME -->
      <section id="home">
         <div class="row">
            <div class="home-slider">
               <div class="item item-first" style="background-image: url(images/toa.jpg);">
                  <div class="caption">
                     <div class="container">
                        <div class="col-md-6 col-sm-12 col-md-offset-3">
                           <h1>India Needs You !</h1>
                           <h3> If you are a recovered Covid 19 patient, come forward and donate your plasma. Your contribution may help save a life!</h3>
                           <a href="#plasma_resources" class="section-btn btn btn-default smoothScroll">Donate Plasma</a>
                           <a href="#find_services" class="section-btn btn btn-default smoothScroll">Find a Plasma Donor</a>
                           <a href="#find_services" class="section-btn btn btn-default smoothScroll">Find Oxygen Cylinder</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Services Listing -->
      <section id="find_services" class="find_a_donor">
         <div class="container">
          <h2 class="text-center">Services Searching For</h2> 
          <form action="twitter_post_search.php" method="POST">
           <div class="row">
               <div class="col-md-4">
               <input type="checkbox"  name="services[]" class="" checked value="ICU Beds"> <label for="" class="">Beds</label>
               </div>
               <div class="col-md-4">
               <input type="checkbox"  name="services[]" class="" checked value="Oxygen"> <label for="" class="">Oxygen Cylinder</label>
               </div>
               <div class="col-md-4">
               <input type="checkbox"  name="services[]" class="" checked value="Plasma"> <label for="" class="">Plasma</label>
               </div>
               <div class="col-md-4">
               <input type="checkbox"  name="services[]" class="" checked value="Remdesivir"> <label for="" class="">Remdesivir</label>
               </div>
               <div class="col-md-4">
               <input type="checkbox" name="services[]" class="" checked value="Ventilator"> <label for="" class="">Ventilator</label>
               </div>
               <div class="col-md-4">
               <input type="checkbox" name="services[]" class="" value="testing" checked> <label for="" class="">RT PCR Test</label>
            </div>

            <div class="row">
            <div class="col-md-6">
                     <label>Enter the City</label>
                     <input required type="text" class="form-control" placeholder="Enter the  city name" name="cityName">
                  </div>
            </div>
            <div class="col-md-4 col-sm-12">
                     <input type="submit" class="form-control" name="search" value="Search">
                  </div>

           </div>
           </form>
         </div>
      </section>

      <!-- Major cities-->
      <section id="major_cities" class="major_cities">
         <div class="container">
          <h2 class="text-center">Services For Major Cities</h2> 
          <div class="row">
          <?php 

          ?>
            <div class="col-md-6">
                  <ol>
                     <li><a href="https://twitter.com/search?q=verified+dehradun+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Dehradun</a></li>
                     <li><a href="https://twitter.com/search?q=verified+delhi+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Delhi</a></li>
                     <li><a href="https://twitter.com/search?q=verified+mumbai+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Mumbai</a></li>
                     <li><a href="https://twitter.com/search?q=verified+pune+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Pune</a></li>
                     <li><a href="https://twitter.com/search?q=verified+bangalore+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Bangalore</a></li>
                     <li><a href="https://twitter.com/search?q=verified+ahmedabad+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Ahmedabad</a></li>
                     <li><a href="https://twitter.com/search?q=verified+kolkata+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Kolkata</a></li>
                     <li><a href="https://twitter.com/search?q=verified+jaipur+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Jaipur</a></li>
                     <li><a href="https://twitter.com/search?q=verified+nagpur+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Nagpur</a></li>
                     <li><a href="https://twitter.com/search?q=verified+lucknow+%28ICU+Beds+OR+Oxygen+OR+Plasma+OR+Remdesivir+OR+Ventilator+OR+testing+%29&f=live" target="_blank" rel="noopener noreferrer">Lucknow</a></li>
                  </ol>
            </div>
          </div>
         </div>
      </section> 

      <!-- plasma resources -->
      <section id="plasma_resources" class="plasma_resources">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="about-info">
                     <h2 class="text-center">PAN INDIA PLASMA RESOURCES</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="about-info">
                     <h3>1. <a href="https://dhoondh.com/">Dhoondh</a> – Portal for matching donors and patients.</h3>
                     <h3>2. <a href="http://plasmadonor.in">plasmadonor.in</a> – Bridge between recipients & donors.</h3>
                     <h3>3. <a href="https://covidplasmain.page.link/pintnetwork">PINT</a> – Plasma In Need for Transfusion.</h3>
                     <h3>4. <a href="https://needplasma.in/">needplasma.in</a> – Connecting donors and patients.</h3>
                     <h3>5. <a href="https://plasmaline.in/">PlasmaLine</a> – Matching eligible plasma donors with patients.</h3>
                     <h3>6. <a href="https://givered.in/">givered.in</a> – for COVID-19 plasma donor match.</h3>
                     <h3>7. <a href="https://www.simplyblood.com/">simplyblood.com</a> – Find Blood/Plasma Donor.</h3>

                  </div>
               </div>
            </div>
         </div>
      </section> 

      <!-- Who Can Donate -->
      <section id="who_can_donate" class="who_can_donate">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="about-info">
                     <h2 class="text-center">DONOR ELIGIBILITY FOR PLASMA DONATION</h2>
                     <h5>Convalescent plasma, which is taken from a person who has been cured of corona infection. In short, it may be a promising alternative in the treatment of plasma COVID-19 disease.
                        If you have ever been infected with corona and have become corona negative after infection, you have been treated for 14 days and you are feeling healthy then only you are eligible to donate Convalescent Plasma.
                        By becoming a plasma donor, with your priceless plasma, you can give a new hope of life to the corona patient!
                     </h5>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  <div class="about-info">
                     <h3>You CAN donate plasma if:</h3>
                     <p>You are between 18-60 years old.</p>
                     <p>You were tested positive for COVID-19.</p>
                     <p>You have fully recovered and are free of symptoms for 14 days.</p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12">
                  <div class="about-info">
                     <h3>You cannot donate plasma if:</h3>
                     <p>Your weight is less than 50 kg.</p>
                     <p>You are a Cancer Survivor.</p>
                     <p>Females who have ever been pregnant</p>
                     <p>You have chronic kidney/heart/lung or liver disease.</p>
                     <p>
                        You have uncontrolled diabetes or hypertension with change in medication in last 28 days
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>                         

      <!-- What we do -->
      <section id="what_we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="about-info">
                     <h2 class="text-center">What we do</h2> 
                           <p>Plasma therapy is an experimental COVID-19 therapy. Before you register, please consult your doctor if this is required. Only patients with a case sheet from the doctor on duty will be matched.</p>
                           <p>It is a non commercial initiative started with an intention of helping people out in whatever possible way. If you want to reach out and understand more about the initiative, please email us on <strong>getplasmadonorin@gmail.com</strong>.</p>
                           <p>We do not promote any monetary transaction between patient and donor.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <!-- FOOTER -->
       <footer id="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6">
                  <div class="footer-info">
                     <div class="copyright-text">
                        <p>Copyright &copy;  <?php echo date('Y'); ?> Get Plasma Store</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="footer-info">
                     <address>
                        <p><strong>Email us: </strong><a href="mailto:getplasmadonorin@gmail.com">getplasmadonorin@gmail.com</a></p>
                     </address>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- SCRIPTS -->
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
   </body>
</html>