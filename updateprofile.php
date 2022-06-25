<?php      
          session_start();
          if(isset($_SESSION['logname'])){  

            $y=$_SESSION['logname']; 
            $myname=$_SESSION['name'];                  

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

  <title>LMS-PROFILE UPDATE</title>
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
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">vijaypatil@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91-7828987239
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


          <form action="./model/UpdateCheck.php" method="post" role="form" class="php-email-form">
           <?php

            $user=mysqli_fetch_array($r);           

          ?>
                           
              <table cellpadding="5px" class="table table-striped table-hover">
               

                <tr>
                  <td style="font-size: 20px;text-align: left;">Username</td>
                  <td style="font-size: 20px;text-align: left;"><input type="text" name="uname" value="<?=$user['name']?> " style="width: 100%;background-color: var(--bs-table-striped-bg);border: none;text-align: center"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">Gender</td>
                  <td style="font-size: 20px;text-align: left;"><input type="text" name="ugender" value="<?=$user['gender']?> " style="width: 100%;background-color: var(--bs-table-bg);border: none;text-align: center;"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">Phone</td>
                  <td style="font-size: 20px;text-align: left;"><input type="numbers" name="uphone" value="<?=$user['phone']?> " style="width: 100%;background-color: var(--bs-table-striped-bg);border: none;text-align: center"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">Email</td>
                  <td style="font-size: 20px;text-align: left;"><input type="email" name="uemail" value="<?=$user['email']?> " style="width: 100%;background-color: var(--bs-table-bg);border: none;text-align: center;"></td>
                </tr>
              
                <tr>
                  <td style="font-size: 20px; text-align: left;" width="200px">Date of Birth</td>
                  <td width="500px" style="font-size: 20px;text-align: left;"><input type="date" name="udate" value="<?=$user['dob']?>" style="width: 100%;background-color: var(--bs-table-striped-bg);border: none;text-align: center"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">Pan Number</td>
                  <td style="font-size: 20px;text-align: left;"><input type="text" name="upan" value="<?=$user['pan']?>" style="width: 100%;background-color: var(--bs-table-bg);border: none;text-align: center;"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;text-align: left;text-align: left;">Address</td>
                  <td style="font-size: 20px;text-align: left;width: "><input type="text" name="uadd" value="<?=$user['address']?> " style="width: 100%;background-color: var(--bs-table-striped-bg);border: none;text-align: center"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;text-align: left;">City</td>
                  <td style="font-size: 20px;text-align: left;"><input type="text" name="ucity" value=" <?=$user['city']?>" style="width: 100%;background-color: var(--bs-table-bg);border: none;text-align: center;"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;text-align: left;">State</td>
                  <td style="font-size: 20px;text-align: left;"> <input type="text" name="ustate" value="<?=$user['state']?>" style="width: 100%;background-color: var(--bs-table-striped-bg);border: none;text-align: center"></td>
                </tr>
                <tr>
                  <td style="font-size: 20px;text-align: left;">Pincode</td>
                  <td style="ont-size: 20px;text-align: left;"><input type="numbers" name="upin" value="<?=$user['pincode']?> " style="width: 100%;background-color: var(--bs-table-bg);border: none;text-align: center;"></td>
                </tr>
                <tr >
                  
                  <td colspan='2' align="center"><button name="btn_upd" style="border-radius: 15px;background-color:#f6b024;padding: 5px;">UPDATE PROFILE</button></td>
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
<?php
}
}else{
   header('Location:./updateprofile.php?msg=No Data Found');
}

 }else{
  header('Location:./login.php');
 }
?>




