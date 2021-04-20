<?php include("connection.php"); 
     $query_state =mysqli_query($con,"SELECT * FROM state");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
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
                  <li><a href="#about" class="smoothScroll">How It Works</a></li>
                  <li><a href="#who_can_donate" class="smoothScroll">Who Can Donate</a></li>
                  <li><a href="#contact" class="smoothScroll">Donate Plasma</a></li>
                  <li><a href="#find_a_donor" class="smoothScroll">Find a Donor</a></li>
                  <li><a href="#what_we_do" class="smoothScroll">What we do</a></li>
                  <li><a href="#plasma_therapy" class="smoothScroll">More about Plasma</a></li>
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
                           <a href="#contact" class="section-btn btn btn-default smoothScroll">Donate Plasma</a>
                           <a href="#find_a_donor" class="section-btn btn btn-default smoothScroll">Find a Donor</a>
                        </div>
                     </div>
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
      <!-- ABOUT -->
      <section id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="about-info">
                     <h2 class="text-center">HOW IT WORKS</h2>
                     <figure>
                        <span><i class="fa fa-users"></i></span>
                        <figcaption>
                           <h3>Register your details</h3>
                           <p>The Plasma donor can registered their details like Name, Number, Blood group and Location ( which will be visible for visiters who are seeking for plasma ).</p>
                        </figcaption>
                     </figure>
                     <figure>
                        <span><i class="fa fa-certificate"></i></span>
                        <figcaption>
                           <h3>Website will display donors information</h3>
                           <p>Based on the information provided and searches like ( Blood Group, State & District), our web portal will provide donor's details to the patient.</p>
                        </figcaption>
                     </figure>
                     <figure>
                        <span><i class="fa fa-bar-chart-o"></i></span>
                        <figcaption>
                           <h3>You can contact donor's directly</h3>
                           <p>If you matches with the required plasma you are looking for then patient can contact the displayed donors via mobile or email directly.</p>
                        </figcaption>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
   
      <!-- Donor Listing -->
      <section id="find_a_donor" class="find_a_donor">
         <div class="container">
          <h2 class="text-center">FIND A DONOR</h2>
          <?php if (isset($_SESSION['donor_success_message']) && $_SESSION['donor_success_message'] != '') { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $_SESSION['donor_success_message']; ?>
            </div>
         <?php $_SESSION['donor_success_message'] = '';
               unset($_SESSION['donor_success_message']); 
         } ?>   
            <div class="table-responsive">
               <div class="table-wrapper">
                    <div class="selection-box">
                         <div class="row">
                              <div class="col-md-3">
                                   <select id="bloodGroup" class="form-control">
                                       <option value="">Search Blood Group</option>
                                       <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="others">Don't Know</option>
                                    </select>
                              </div>
                         </div>
                    </div>
                  <table id="donorListing" class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>S.No</th>
                           <th>Recovered On</th>
                           <th>Blood Group</th>
                           <th>Full Name</th>
                           <th>Contact Number</th>
                           <th>Email Address</th>
                           <th>Age</th>
                           <th>Gender</th>
                           <th>State</th>
                           <th>District</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $ret=mysqli_query($con,"SELECT donor_information.*, state.StateName FROM donor_information LEFT JOIN state ON donor_information.state = state.StCode");
                           $cnt=1;
                           $row=mysqli_num_rows($ret);
                           if($row>0){
                           while ($row=mysqli_fetch_array($ret)) {
                           ?>
                        <!--Fetch the Records -->
                        <tr>
                           <td><?php echo $cnt;?></td>
                           <td><?php  echo $row['recoveredon'];?>
                           <td><?php  echo $row['bloodGroup'];?>
                           <td><?php  echo $row['fname'];?></td>
                           <td><a href="tel:<?php echo $row['contactNumber'];?>"><?php echo $row['contactNumber'];?></a></td>
                           <td><?php  echo $row['emailAddress'];?></td>
                           <td><?php  echo $row['age'];?></td>
                           <td><?php  echo $row['gender'];?></td>
                           <td><?php  echo $row['StateName'];?></td>
                           <td> <?php  echo $row['district'];?></td>
                        </tr>
                        <?php 
                           $cnt=$cnt+1;
                           } } else {?>
                        <tr>
                           <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                        </tr>
                        <?php } ?>                 
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </section>
      <!-- CONTACT -->
      <section id="contact">
         <div class="container">
            <h2 class="text-center">DONATE PLASMA</h2>
            <form id="contact-form" role="form" action="save_donor_information.php" method="post">
               <h4>Please Enter Donor Details Below</h4>
               <div class="row">
                  <div class="col-md-6">
                     <label>Did you ever get covid:</label>
                     <select name="checkCovid" id="checkCovid" class="form-control">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label>Recovered On:</label>
                     <input required type="text" class="form-control datepicker" placeholder="Enter Date" name="recoveredon" id="recoveredon">
                  </div>
                  <div class="col-md-6">
                     <label>Full Name</label>
                     <input required type="text" class="form-control" placeholder="Enter full name" name="fname">
                  </div>
                  <div class="col-md-6">
                     <label>Email Address</label>
                     <input required type="email" class="form-control" placeholder="Enter email address"
                        name="emailAddress">
                  </div>
                  <div class="col-md-6">
                     <label>Age</label>
                     <input required type="number" class="form-control" placeholder="Enter your age"
                        name="age">
                  </div>
                  <div class="col-md-6">
                     <label>Contact Number</label>
                     <input required type="number" class="form-control" placeholder="Enter contact number"
                        name="contactNumber">
                  </div>
                  <div class="col-md-6">
                     <label>Blood Group</label>
                     <select name="bloodGroup" id="blood group" class="form-control">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="others">Don't Know</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label>Gender</label>
                     <select name="gender" id="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label>State</label>
                     <select required onChange="getdistrict(this.value);" name="state" id="state" class="form-control">
                         <option value="">Select State</option>
                        <?php 
                           while($row=mysqli_fetch_array($query_state)) { ?>
                        <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label>District</label>
                     <select required name="district" id="district-list" class="form-control">
                        <option value="">Select</option>
                     </select>
                  </div>
                  <div class="col-sm-12">
                     <input type="checkbox" required id="vehicle1" name="authorize" value="">
                     <label for="vehicle1">I authorise this website to display my name and telephone number, so that the needy could contact me for the required plasma or other query.</label><br>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <input type="submit" class="form-control" name="donate" value="Donate">
                  </div>
               </div>
            </form>
         </div>
      </section>

      <!-- What we do -->
      <section id="what_we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="about-info">
                     <h2 class="text-center">What we do</h2>
                           <p>Plasma Donors can register their information with us. This information pertains to name, contact number, blood group, location etc. This helps us in finding the best match for the patients. Patient can directly see those information in website we do not act as intermediaries between the patient and the donor. Once both the parties have a match, they can directly contact each other.</p>

                           <h3 style="margin-bottom:10px;"><strong>Please note</h3> 
                           <p>Plasma therapy is an experimental COVID-19 therapy. Before you register, please consult your doctor if this is required. Only patients with a case sheet from the doctor on duty will be matched.</p>
                           <p>It is a non commercial initiative started with an intention of helping people out in whatever possible way. If you want to reach out and understand more about the initiative, please email us on <strong>getplasmadonorin@gmail.com</strong>.</p>
                           <p>We do not promote any monetary transaction between patient and donor.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- FEATURE -->
      <section id="plasma_therapy">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="section-title text-center">
                     <h2>PLASMA THERAPY <small>The therapy aims at using antibodies from the blood of a recovered COVID-19 patient
                        to treat those critically infected by the virus.
                        </small>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row d-flex">
               <div class="col-md-6">
                  <div class="feature-thumb">
                     <h3>What is Plasma?</h3>
                     <p>Plasma is the clear, straw-colored liquid portion of blood that remains after red blood cells, white blood cells, platelets and other cellular components are removed. It is the single largest component of human blood, comprising about 55 percent, and contains water, salts, enzymes, antibodies and other proteins.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="feature-thumb">
                     <h3>What is Covid-19 Plasma?</h3>
                     <p>Convalescent plasma refers to plasma obtained from an individual who has recuperated from an infection. During the infectious period, the individual’s immune system would have mounted an attack on the foreign virus. By the time the virus is vanquished, the body would have developed ammunition specifically to beat the virus, which will be a type of antibody</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="feature-thumb">
                     <h3>Why to donate Plasma?</h3>
                     <p>Quite simply, plasma donors are needed because lives depend on plasma protein therapies. Donating plasma is often called, "the gift of life.".Plasma donation and blood donation are critically important activities that contribute to saving lives.Your plasma will be used to create therapies to treat Covid-19 patients.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="feature-thumb">
                     <h3>Who can donate Plasma?</h3>
                     <p>You have a prior, verified diagnosis of COVID-19, but are now symptom free. You must have recovered from symptoms at least 14 days prior to donation.You are at least 17 years old and less than 65 years old. You do not have diabetes or high blood pressure.</p>
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
      <script type="text/javascript">
         var table =  $('#donorListing').dataTable({
               "iDisplayLength": 50
          });
         
          $('#bloodGroup').on('change', function () {
                    table.api().column(6).search( this.value ).draw();
                } );
          $('.datepicker').datepicker().on('changeDate', function(ev) {
          $('.datepicker').datepicker('hide');
          });
      </script>
      <script>
         function getdistrict(val) {
              $.ajax({
              type: "POST",
              url: "get_district.php",
              data:'state_id='+val,
              success: function(data){
                   $("#district-list").html(data);
              }
              });
         }
      </script>
   </body>
</html>