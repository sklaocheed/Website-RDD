<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon2.ico">
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sarabun">
  <title>RDD รถดีเด็ด</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
  <link rel="stylesheet" href="assets/css/c4.css">
  <!-- owlcarousel -->
  <link rel="stylesheet" href="owlcarousel2/dist/assets2/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel2/dist/assets2/owl.theme.default.min.css">


  <style>
    /* Note: Try to remove the following lines to see the effect of CSS positioning */
    .affix {
        top: 0;
        width: 100%;
        z-index: 9999 !important;
    }

    .affix + .container-fluid {
        padding-top: 70px;
    }
    </style>
</head>

<body>
  <div class="top-bar" style="background : #1D295B" data-spy="affix">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="float-right" >
            <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block" style="color : white">username</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header Start -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2><img src="assets/images/logoRDD.png" width="120px" alt=""></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="cars.php">ซื้อรถ<span class="sr-only">(current)</span></a></li>
            <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="team.html">Team</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> -->
            <li class="nav-item"><a class="nav-link" href="findcar.php">ค้นหารถ</a></li>
            <li class="nav-item"><a class="nav-link" href="promotion.php">โปรโมชั่น</a></li>
            <li class="nav-item  active"><a class="nav-link" href="contact.php">ติดต่อเรา</a></li>
            <li class="nav-item"><a class="nav-link" href="Login_v4/index.php">เข้าสู่ระบบ</a></li>
            <!-- <div class="header_wishlist">
                  <a href="wishlist.html"><span class="lnr lnr-heart"></span> รถที่ชอบ </a>
                  <span class="wishlist_quantity">0</span>
              </div> -->
          </ul>

        </div>

      </div>
    </nav>
  </header>
  <!-- Header End -->

    <!-- Page Content -->
    <div class="" 
    style="background-image: url(assets/images/banner/Banner_Contact.png);
        padding: 300px 0px 230px 0px;  
        background-position: center center; margin-top: 100px;
        background-repeat: no-repeat;
        background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <!-- <h4>ติดต่อเรา</h4> -->
              <!-- <h2>ติดต่อเรา</h2> -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us" style="background-color: #FCEDBE; padding-top:50px; padding-bottom: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="background-color: #1D295B; 
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;">ตำแหน่งของเราบนแผนที่</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.886894573339!2d100.6986145142697!3d13.603719504374215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5fc9920faaef%3A0x7621ddf93d26e8a0!2sRDD%20Car%20Center!5e0!3m2!1sth!2sth!4v1650103356335!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>สำนักงานของเรา</h4>
              <p>RDD Car Centerบริษัท รถดีเด็ด ออโต้ จำกัด <br><br>71/1 หมู่ที่ 20 ถ. เทพารักษ์ ตำบล บางพลีใหญ่ อำเภอบางพลี สมุทรปราการ 10540</p>
              <p>เวลาทำการ 09.00 น. - 17.00 น. ทุกวัน วันจันทร์ - วันอาทิตย์ <br><br>Tel. 021-256-5887</p>
              
              <ul class="icons-social">
                <li><a target="_blank" href="https://www.facebook.com/rddcarcenter"><img src="assets/images/icon/facebook.png" width="64" height="64" href="https://www.facebook.com/rddcarcenter"></li>
                <li><a target="_blank" href="https://www.instagram.com/rddcarcenter/"><img src="assets/images/icon/instagram.png" width="64" height="64"></li>
                <li><a target="_blank" href="https://www.youtube.com/channel/UCqud3Wt36FzeLhujcDaEDCg"><img src="assets/images/icon/youtube.png" width="64" height="64"></li>
               
              </ul>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
  
              <div class="home-demo">
                <h3 style="background-color: #1D295B; 
                      color: white;
                      padding: 15px 32px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 16px;
                      margin: 4px 2px;">RDD ขอขอบคุณลูกค้าจากใจที่วางใจซื้อรถจากเรา
                </h3>
                <br><br>
  
                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets/images/thankyouCustomer/1.jpg" alt="">
                  </div>
                  <div class="item">
                  <img src="assets/images/thankyouCustomer/2.jpg" alt="">
                  </div>
                  <div class="item">
                  <img src="assets/images/thankyouCustomer/3.jpg" alt="">
                  </div>
                  <div class="item">
                  <img src="assets/images/thankyouCustomer/4.jpg" alt="">
                  </div>
                 
                  
                  
                  
                  
                  
                  
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>

    
    <!-- <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/team_01.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">John Doe</h5>
          </div>
        </div>
      </div>
    </div> -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>
                Copyright © 2022 RDD รถ ดี เด็ด 
                <!-- <a href="https://www.phpjabbers.com/">PHPJabbers.com</a> -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="OwlCarousel2/dist/owl.carousel2.min.js"></script>
  <script>
    $(function() {
      // Owl Carousel
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: true
      });
    });
  </script>
  </body>

</html>