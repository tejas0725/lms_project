<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LMS-Change Password</title>
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
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">tejus@.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +918765537155
      </div>
      <div class="cta d-none d-md-block">
        <a href="./logout.php" class="scrollto">Sign Out</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->

<?php
    include("./CommonPages/header.php");
?>

  <!-- End Header -->

<!-- End Hero -->

<main id="main">
 <!-- ======= Portfoio Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center" style="height: 250px;">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel" style="font-size: 35px;color: white;margin-top: 90px;"><center>Welcome <?php echo $_SESSION['name'];?></center></div>

</section>


<section id="team" class="team section-bg" style="margin-top: 100px;">
   <div class="carousel-item active" >
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="text-align: center;margin-bottom: 20px;"><big>Change Password</big></h2>
        </div>
       <div class="container" data-aos="fade-up">
        <div class="row">

             <form action="./model/ChangePasswordCheck.php" method="post" role="form" class="php-email-form" style="margin-left: 30%;">
                           
              <table cellpadding="10px">
                <tr >
                  <td style="font-size: 20px;text-align: left;">OLD PASSWORD</td>
                  <td><input type="text" name="oldpass" class="form-control" id="name" placeholder="Enter Old Password" required></td>
                </tr>

                <tr>
                  <td style="font-size: 20px;text-align: left;">NEW PASSWORD</td>
                  <td> <input type="password" class="form-control" name="newpass" id="email" placeholder="Enter New password" required></td>
                </tr>
                 <tr>
                  <td style="font-size: 20px;text-align: left;">CONFIRM NEW PASSWORD</td>
                  <td> <input type="password" class="form-control" name="cnewpass" id="email" placeholder="Confirm New password" required></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><button type="submit" style="padding: 5px;width: 100px; background-color:#f6b024;border-radius: 25px;" name="btn_Check">GO</button></td>
                </tr>
              </table>
            </form>


  </div>
      </div>
</section><!-- End Team Section -->
</main>
 
  <!-- ======= Footer ======= -->
  <?php
    include("./CommonPages/footer.php");
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


