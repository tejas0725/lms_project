<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LMS-Registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v4.7.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">vj@gmail@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91-7828987239
      </div>
      <div class="cta d-none d-md-block">
         <a href="./login.php" class="scrollto">LOG IN</a>
        <a href="./contact.php" class="scrollto">CONTACT</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->

<?php
    include("./CommonPages/mainheader.php");
?>

  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center" style="height: 250px;">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

</section>
<!-- End Hero -->
<main id="main">
 <!-- ======= Portfoio Section ======= -->
<section id="portfolio" class="portfoio">
     <div class="container" data-aos="fade-up">

     </div>
</section>
<!-- End Portfoio Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg " style="margin-top: -50px;" >
   <div class="carousel-item active" >
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="text-align: center;margin-bottom: 15px;"><big>Register Here</big></h2>
        </div>
       <div class="container" data-aos="fade-up">
        <div class="row">

        <form action="./model/RegisterCheck.php" method="post" role="form" class="php-email-form" style="margin-left: 10%;">
                           
              <table cellpadding="10px" cellspacing="15px" class="offset">
               

                <tr>
                  <td style="font-size: 20px;text-align: left;">USERNAME</td>
                  <td> <input type="text" class="form-control" name="uname" id="email" placeholder="Enter Username" required></td>
                   <td style="font-size: 20px;text-align: left;">PASSWORD</td>
                  <td> <input type="password" class="form-control" name="upass" id="email" placeholder="Enter password" required></td>
                  
                </tr>
                
                <tr>
                  <td style="font-size: 20px;text-align: left;">PHONE</td>
                  <td> <input type="number" class="form-control" name="uphone" id="email" placeholder="Enter Phone number" required></td>
                   <td style="font-size: 20px;text-align: left;">E-MAIL</td>
                  <td> <input type="email" class="form-control" name="uemail" id="email" placeholder="Enter email" required></td>
                </tr>
                
                <tr>
                  <td style="font-size: 20px;text-align: left;">GENDER</td>
                  <td> <input type="text" class="form-control" name="ugender" id="email" placeholder="Enter Gender" required></td>
                   <td style="font-size: 20px; text-align: left;" width="200px">BIRTH DATE</td>
                  <td width="500px"> <input type="date" class="form-control" name="udob" id="email" placeholder="Enter Date Of Birth" required></td>
                </tr>
               
                <tr>
                  <td style="font-size: 20px;text-align: left;">PAN NUMBER</td>
                  <td> <input type="text" class="form-control" name="upan" id="email" placeholder="Enter PanNumber" required></td>
                  <td style="font-size: 20px;text-align: left;">PINCODE</td>
                  <td> <input type="number" class="form-control" name="upin" id="email" placeholder="Enter PinCode" required></td>
                  
                </tr>
               
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;text-align: left;">CITY</td>
                  <td> <input type="text" class="form-control" name="ucity" id="email" placeholder="Enter City" required></td>
                   <td style="font-size: 20px;text-align: left;text-align: left;">STATE</td>
                  <td> <input type="text" class="form-control" name="ustate" id="email" placeholder="Enter State" required></td>
                </tr>
              
                <tr>
                   <td style="font-size: 20px;text-align: left;text-align: left;text-align: left;text-align: left;">ADDRESS</td>
                  <td colspan="3"> <input type="text" class="form-control" name="uaddress" id="email" placeholder="Enter Address" required></td>
                  
                </tr>
                <!--tr>
                  <td style="color: white;font-size: 20px;text-align: left;">Username</td>
                  <td> <input type="password" class="form-control" name="email" id="email" placeholder="Enter password" required></td>
                </tr-->
                <tr>
                  <td colspan="4" align="center"><button type="submit" style="padding: 10px;width: 100px; background-color:#f6b024;border-radius: 50px 10px;" name="btn_register">Login</button></td>
                </tr>
              </table>
            </form>
         
       </div>
      </div>
</section><!-- End Team Section -->
</main>



 
  <!-- ======= Footer ======= -->
  <?php
    include("./CommonPages/mainfooter.php");
  ?>
 <!-- End Footer -->

 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

