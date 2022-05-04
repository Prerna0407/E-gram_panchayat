<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>About Us - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
   
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>
<style>
        .pb-5, .py-5 {
    padding-bottom: 3rem!important;
    margin-top: 20px;
    }
    .page-title .content-box {
    position: relative;
    /* padding: 270px 0px 215px; */
    padding-top: 186px;
}
.page-title {
    height: 44vh;
}
.page-title .content-box h1 {
    margin-top: -30px;
}
</style>
<body>

<div class="page-wrapper">
    <!-- Preloader -->
  

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    
                </div>
           
                <!-- Contact Widget -->
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-20.png);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>About panchayat</h1>
                    </div>
                  
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
      
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
           

                    <div class="container my-5">
   <div class="row">
     <div class="col-md-6 p-4 p-sm-5 order-2 order-sm-1">
       <small class="text-uppercase" style="color: #9B5DE5;">About us</small>
       <h1 class="h2 mb-4" style="font-weight: 600;">information <span style="color: #9B5DE5;">panchayat</span></h1>
       <p class="text-secondary" style="line-height: 2;">panchayats are local self-government bodies at the village level.
                         They are a cornerstone of the panchayati raj system.
                          A gram panchayat can be set up in villages with a population of more than five hundred..</p>
       <a href="#" style="background-color: #9B5DE5; width: 240px;" class="btn px-4 py-3 mt-4 text-white d-flex align-items-center justify-content-between">
        <span>Get info</span>
        <svg width="25px" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
        <g>
          <g>
            <path d="M329.2,327.2c-4.5,0-8.1,3.4-8.6,7.9c-3.9,38.6-36.5,68.7-76.2,68.7c-39.6,0-72.2-30.1-76.2-68.7
              c-0.5-4.4-4.1-7.9-8.6-7.9h-104c-21.8,0-39.5,17.7-39.5,39.5v82.8c0,21.8,17.7,39.5,39.5,39.5h377.8c21.8,0,39.5-17.7,39.5-39.5
              v-82.7c0-21.8-17.7-39.5-39.5-39.5H329.2V327.2z"/>
            <path d="M303.5,198.6l-30.9,30.9V28.1C272.6,12.6,260,0,244.5,0l0,0c-15.5,0-28.1,12.6-28.1,28.1v201.4l-30.9-30.9
              c-9.5-9.5-24.7-11.9-35.9-4.4c-15.3,10.2-16.8,31.1-4.5,43.4l82.8,82.8c9.2,9.2,24.1,9.2,33.3,0l82.8-82.8
              c12.3-12.3,10.8-33.2-4.5-43.4C328.2,186.6,313,189,303.5,198.6z"/>
          </g>
        </svg>
      </a>
     </div>
     <div class="col-md-6 p-0 text-center order-1 order-sm-2">
        <img src="assets/images/panchayat-1.jpg" class="w-100" alt="">
     </div>
 
    <div class="col-md-6 p-0 text-center">
       <img src="assets/images/panchayat3.jpg" class="w-100" alt="">
    </div>
    <div class="col-md-6 p-4 p-sm-5">
      <small class="text-uppercase" style="color: #9B5DE5;">About us</small>
      <h1 class="h2 mb-4" style="font-weight: 600;">Objective <span style="color: #9B5DE5;"> !</span></h1>
      <p class="text-secondary" style="line-height: 2;">Implementing various initiatives to create clean, beautiful and
       green villages.</p>
       <p class="text-secondary" style="line-height: 2;">Providing shelter and shelter related facilities under Pradhan Mantri Gramin Awaas Yojana<.</p>
       <p class="text-secondary" style="line-height: 2;">Empowering Panchayati Raj System by empowering public representatives under development program through training<.</p>
      <a href="#" style="background-color: #9B5DE5; width: 240px;" class="btn px-4 py-3 mt-4 text-white d-flex align-items-center justify-content-between">
        <span>Objective</span>
        <svg width="25px" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
        <g>
          <g>
            <path d="M329.2,327.2c-4.5,0-8.1,3.4-8.6,7.9c-3.9,38.6-36.5,68.7-76.2,68.7c-39.6,0-72.2-30.1-76.2-68.7
              c-0.5-4.4-4.1-7.9-8.6-7.9h-104c-21.8,0-39.5,17.7-39.5,39.5v82.8c0,21.8,17.7,39.5,39.5,39.5h377.8c21.8,0,39.5-17.7,39.5-39.5
              v-82.7c0-21.8-17.7-39.5-39.5-39.5H329.2V327.2z"/>
            <path d="M303.5,198.6l-30.9,30.9V28.1C272.6,12.6,260,0,244.5,0l0,0c-15.5,0-28.1,12.6-28.1,28.1v201.4l-30.9-30.9
              c-9.5-9.5-24.7-11.9-35.9-4.4c-15.3,10.2-16.8,31.1-4.5,43.4l82.8,82.8c9.2,9.2,24.1,9.2,33.3,0l82.8-82.8
              c12.3-12.3,10.8-33.2-4.5-43.4C328.2,186.6,313,189,303.5,198.6z"/>
          </g>
        </svg>
      </a>
    </div>
   </div>
 </div>


<!-- Credit: Componentity.com -->
<a href="https://componentity.com" target="_blank" class="block">
  <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png" width="120px" class="d-block mx-auto my-5">
</a>


                </div>
            </div>
        </div>
    </section>

    


   
   


    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>













