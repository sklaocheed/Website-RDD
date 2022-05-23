<?php
include('connect.php');
$id= $_GET['id'];
$query1 = mysqli_query($con, "SELECT * FROM tips WHERE 	id_tips = $id");
$result1 = mysqli_fetch_array($query1);
?>
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

  <!-- fontawasome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="cars.html">ซื้อรถ<span class="sr-only">(current)</span></a></li>
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
            <li class="nav-item"><a class="nav-link" href="findcar.html">บริการหารถ</a></li>
            <li class="nav-item"><a class="nav-link" href="promotion.html">โปรโมชั่น</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.html">ติดต่อเรา</a></li>
            <li class="nav-item"><a class="nav-link" href="Login_v4/index.html">เข้าสู่ระบบ</a></li>
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
    style="background-image: url(<?=$result1['banner_tips']?>);
        padding: 300px 0px 300px 0px;  
        background-position: center center; 
        margin-top: 100px;
        background-repeat: no-repeat;
        background-size: cover;">
        
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2><?=$result1['title_tips']?></h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="left-content">
                <img src="<?=$result1['pic_tips']?>" class="img-fluid" alt="">
              </div>
            </div>

            <div class="col-md-8">
              <p><?=$result1['detail_tips']?></p>
            </div>

            
        </div>

        <br>
        
       
      </div>
    </div>

    

  
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
