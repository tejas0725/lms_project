<?php      
          session_start();
          if(isset($_SESSION['logname'])){  

            $y=$_SESSION['logname'];  
            $_SESSION['name'];                 

          $host="localhost";
          $usn="root";
          $pass1="";
          $dbname="loan_managment_system";

          $conn= mysqli_connect($host,$usn,$pass1,$dbname);
          $query="SELECT name,gender,phone,email,pass,dob,pan,address,city,state,pincode FROM tbl_user WHERE email='$y' ";


        $r=mysqli_query($conn,$query);          
        
        if ($r) {
          $rows=mysqli_num_rows($r);
          if ($rows>0) {

            
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LMS-VIEW PROFILE</title>
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
        <!-- <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">bgi@example.com</a> -->
        <!-- <i class="bi bi-phone-fill phone-icon"></i> +91-7828987239 -->
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

<section id="hero" class="d-flex justify-cntent-center align-items-center" style="height: 250px;">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel" style="font-size: 35px;color: white;margin-top: 90px;"><center>Welcome <?php echo $_SESSION['name'];?></center></div>

</section>

 
<main id="main">
 <!-- ======= Portfoio Section ======= -->
<section id="portfolio" class="portfoio">
     <div class="container" data-aos="fade-up">

     </div>
</section>

<section id="team" class="team section-bg" style="margin-top: -50px;">
   <div class="carousel-item active" >

       
       <div class="container col-lg-6" data-aos="fade-up">
        <div class="row">


           <?php

            $user=mysqli_fetch_array($r);           

          ?>
                           
              <table cellpadding="3px"  class="table table-striped">
               

                <tr>
                  <td style="font-size: 20px;text-align: left;">USERNAME</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['name']?></i></b></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">GENDER</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['gender']?></i></i></b> </td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">PHONE</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['phone']?></i></b> </td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">EMAIL</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['email']?></i></b></td>
                </tr>
              
                <tr>
                  <td style="font-size: 20px; text-align: left;" width="200px">DATE OF BIRTH</td>
                  <td width="500px" style="font-size: 20px;text-align: center;"><b><i><?=$user['dob']?></i></b></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">PAN NUMBER</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['pan']?></i></b></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;text-align: left;text-align: left;">ADDRESS</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['address']?> </i></b></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;text-align: left;">CITY</td>
                  <td style="font-size: 20px;text-align: center;"> <b><i><?=$user['city']?></i></b></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;">STATE</td>
                  <td style="font-size: 20px;text-align: center;"><b> <i><?=$user['state']?></i></b></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">PINCODE</td>
                  <td style="font-size: 20px;text-align: center;"><b><i><?=$user['pincode']?></i></b> </td>
                </tr>
                <!--tr>
                  <td style="color: white;font-size: 20px;text-align: left;">Username</td>
                  <td> <input type="password" class="form-control" name="email" id="email" placeholder="Enter password" required></td>
                </tr-->
               
              </table>
          


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
<?php
}
}

 }else{
  header('Location:./login.php');
 }
?>

