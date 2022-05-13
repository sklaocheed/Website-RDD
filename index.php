<?php
include('connect.php');
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
  <link rel="stylesheet" href="assets/css/s15.css">

  <!-- fontawasome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>

<body>
  <div class="top-bar" style="background : #1D295B">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="float-right">
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
            <li class="nav-item active">
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
            <li class="nav-item"><a class="nav-link" href="findcar.html">ค้นหารถ</a></li>
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
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <!-- <h4>Find your car today!</h4>
             <h2>Laboriosam reprehenderit ducimus</h2>
             <a href="cars.html" class="filled-button1">ซื้อรถ ตอนนี้</a> -->
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <!-- <h4>Fugiat Aspernatur</h4>
            <h2>Laboriosam reprehenderit ducimus</h2> -->
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <!-- <h4>Saepe Omnis</h4>
            <h2>Quaerat suscipit unde minus dicta</h2> -->
        </div>
      </div>
      <div class="banner-item-04">
        <div class="text-content">
          <!-- <h4>Saepe Omnis</h4>
            <h2>Quaerat suscipit unde minus dicta</h2> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->
  <div class="promo-area">
    <div class="container" style="margin-top: 20px; color:black">
      <div class="row">
        <div class="col-sm-3">
          <label>ยี่ห้อรถ:</label>

          <select class="form-control">
            <option value="">All</option>
            <option value="">All</option>
            <option value="">All</option>
          </select>
        </div>
        <div class="col-sm-3">
          <label>รถรุ่น:</label>

          <select class=" form-control">
            <option value="">--All --</option>
            <option value="">--All --</option>
            <option value="">--All --</option>
          </select>
        </div>
        <div class="col-sm-3">
          <label>ปี:</label>

          <select class=" form-control">
            <option value="">--All --</option>
            <option value="">--All --</option>
            <option value="">--All --</option>
          </select>
        </div>
        <div class="col-sm-3">
          <label>สี</label>

          <select class=" form-control">
            <option value="">โปรเลือกสี</option>
            <option value="" style="color:white; background: black;" >ดำ</option>
            <option value="" style="color:black; background: white;">ขาว</option>
            <option value="" style="color:white; background: blue;" >น้ำเงิน</option>
            <option value="" style="color:white; background: red;" >แดง</option>
          </select>
        </div>

      </div>

    </div>
  </div>


  <!-- Content Used car -->
  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">

            <h2 style="text-align: center;"> <img src="assets/images/logoRDD.png" width="100px">อัพเดตรถใหม่</h2>
            <a href="cars.html" style="font-size: large; color: blue">ดูรถเพิ่ม <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details1.html"><img src="assets/images/501.jfif" alt=""></a>

            <div class="down-content">

              <a href="car-details1.html">
                <h4>2016 BENZ E300</h4>
              </a>

              <h6> 890,000.00 Baht</h6>

              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130,009 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>&nbsp;&nbsp;
              <!-- <button style="background-color: #1D295B ;">ดูเพิ่ม +</button> -->
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือสนใจ คลิก</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details2.html"><img src="assets/images/601.jfif" alt=""></a>
            <div class="down-content">
              <a href="car-details2.html">
                <h4>2016 TOYOTA ALTIS</h4>
              </a>

              <h6> 349,000.00 Baht</h6>

              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 79,086 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1600 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือสนใจ คลิก</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details3.html"><img src="assets/images/701.jfif" alt=""></a>
            <div class="down-content">
              <a href="car-details3.html">
                <h4>2016 TOYOTA REVO</h4>
              </a>

              <h6>459,000.00 Baht</h6>

              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 61,317 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2500 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> MT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือสนใจ คลิก</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content Used car End-->


  <!-- Content Promotion -->

  <!-- Promo area -->
  <div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="text-align: center;"> <img src="assets/images/logoRDD.png" width="100px">โปรโมชั่นพิเศษ</h2>
            <a href="cars.html" style="font-size: large; color: blue">ดูรถเพิ่ม <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item" style="background-color: white">
            <a href=""><img src="assets/images/801.jfif" alt=""></a>
            <div class="down-content">
              <a href="">
                <h4>2016 TOYOTA FORTUNER</h4>
              </a>
              <h6><small><del> 1,090,000.00 Baht</del></small> 889,000.00 Baht</h6>
              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 84,718 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 3000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือสนใจ คลิก</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="product-item" style="background-color: white">
            <a href=""><img src="assets/images/901.jfif" alt=""></a>
            <div class="down-content">
              <a href="">
                <h4>2018 HONDA ACCORD</h4>
              </a>
              <h6><small><del> 989,000.00 Baht</del></small> 859,000.00 Baht</h6>
              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 102,000 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือสนใจ คลิก</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="product-item" style="background-color: white">
            <a href=""><img src="assets/images/1001.jfif" alt=""></a>
            <div class="down-content">
              <a href="">
                <h4>2017 BENZ E220</h4>
              </a>
              <h6><small><del> 2,590,000.00 Baht</del></small> 2,090,000.00 Baht</h6>
              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 138,887 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> MT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือสนใจ คลิก</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End promo area -->


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-12">
                <h4>คำนวนค่างวดรถ</h4>

              </div>
              <div class="col-lg-4 col-md-6 text-right">
                <a href="Loan_Calculator/index.html" class="filled-button1">คลิ๊ก</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <!-- Content Promotion ends -->


  <!-- <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" > -->
  <div class="services" style="background-color: beige; ">
    <div class="team-members">
      <div class="container">
        <section>
          <div class="row gx-lg-6">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
              <h3>NEWS</h3>
              <br>
              <!-- News block -->
              <?php
                $query = mysqli_query($con, "SELECT * FROM news WHERE id_news=1");
                
                while($result = mysqli_fetch_array($query)) { ?>
              <div>
                <!-- Featured image -->
                <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                  <img src="<?=$result['pic_news']?>" class="img-fluid" />
                  <a href="new-details.php?id=<?=$result['id_news']?>">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Article data -->
                <div class="row mb-3">
                  <div class="col-6">
                    <a href="" class="text-info">
                      <i class="fas fa-plane"></i>
                      NEWS
                    </a>
                  </div>

                  <div class="col-6 text-end">
                    <u><?=$result['date_news']?></u>
                  </div>
                </div>

                <!-- Article title and description -->
                <a href="new-details.php?id=<?=$result['id_news']?>" class="text-dark">
                  <h5><?=$result['title_news']?></h5>

                  <p><?=$result['detail_show_news']?></p>
                </a>
                <?php } ?>
                <hr />

                <?php
                $query = mysqli_query($con, "SELECT * FROM news ORDER BY id_news DESC");
                
                while($result = mysqli_fetch_array($query)) { ?>
                <!-- News -->
                <a href="new-details.php?id=<?=$result['id_news']?>" class="text-dark">
                  <div class="row mb-4 border-bottom pb-2">
                    <div class="col-3">
                      <img src="<?=$result['pic_news']?>" class="img-fluid shadow-1-strong rounded" alt="" />
                    </div>

                    <div class="col-9">
                      <p class="mb-2"><strong><?=$result['title_news']?></strong></p>
                      <p>
                        <u><?=$result['date_news']?></u>
                      </p>
                    </div>
                  </div>
                </a>
                 <?php } ?>
              </div>
              <!-- News block -->
            </div>

            <div class="col-lg-2 col-md-12 mb-4 mb-lg-0">
            </div>

            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
              <h3>TIPS</h3>
              <br>
              <!-- News block -->
              <div>
                <!-- Featured image -->
                <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                  <img src="assets/images/tips/tips-08.png" class="img-fluid" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Article data -->
                <div class="row mb-3">
                  <div class="col-6">
                    <a href="" class="text-danger">
                      <i class="fas fa-chart-pie"></i>
                      Tips
                    </a>
                  </div>

                  <div class="col-6 text-end">
                    <u> 01.05.2022</u>
                  </div>
                </div>

                <!-- Article title and description -->
                <a href="tips-details-01.html" class="text-dark">
                  <h5>ทำความสะอาด 7 จุดในรถ</h5>
                  <p>
                    ในสถานการณ์แบบนี้ นอกจากการรักษาความสะอาดที่ตัวเราแล้ว
                    รถที่เราขับอยู่ทุกวันก็ควรต้องทำความสะอาดเช่นกัน วันนี้ RDD มีคำแนะนำสำหรับการทำความสะอาด 7 จุดในรถ
                    ป้องกัน COVID-19 มาฝาก จะมีจุดไหนบ้างไปดูกันเลย

                  </p>
                </a>

                <hr />

                <!-- News -->
                <a href="tips-details-02.html" class="text-dark">
                  <div class="row mb-4 border-bottom pb-3">
                    <div class="col-3">
                      <img src="assets/images/tips/tips-09.png" class="img-fluid shadow-1-strong rounded" alt="" />
                    </div>
                    <div class="col-9">
                      <p class="mb-2"><strong>ผ่อนรถมือสองยังไง ให้มีรถใช้ มีเงินเก็บ
                        </strong></p>
                      <p>
                        <u> 01.05.2022</u>
                      </p>
                    </div>
                  </div>
                </a>

                <!-- News -->
                <a href="tips-details-03.html" class="text-dark">
                  <div class="row mb-4 border-bottom pb-2">
                    <div class="col-3">
                      <img src="assets/images/tips/tips-06.png" class="img-fluid shadow-1-strong rounded" alt="Paris - Eiffel Tower" />
                    </div>
                    <div class="col-9">
                      <p class="mb-2"><strong>ซื้อรถมือสอง ได้ไมล์แท้จริงไหม? </strong></p>
                      <p>
                        <u> 01.05.2022</u>
                      </p>
                    </div>
                  </div>
                </a>

                <!-- News -->
                <a href="" class="text-dark">
                  <div class="row mb-4 border-bottom pb-2">
                    <div class="col-3">
                      <img src="assets/images/tips/tips-07.png" class="img-fluid shadow-1-strong rounded" alt="Louvre" />
                    </div>

                    <div class="col-9">
                      <p class="mb-2"><strong>ซื้อรถมือสอง ต้องเตรียมเอกสารอะไรบ้าง ?</strong></p>
                      <p>
                        <u> 01.05.2022</u>
                      </p>
                    </div>
                  </div>
                </a>

                <!-- News -->
                <a href="" class="text-dark">
                  <div class="row mb-4 border-bottom pb-2">
                    <div class="col-3">
                      <img src="assets/images/tips/tips-03.jpg" class="img-fluid shadow-1-strong rounded" alt="Times Square" />
                    </div>

                    <div class="col-9">
                      <p class="mb-2"><strong>5 สิ่งที่ควรตรวจเช็ค ก่อนเดินทางไกล</strong></p>
                      <p>
                        <u> 01.05.2022</u>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- News block -->
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>

  <!-- <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                <h4>ติดต่อเรา</h4>
                <p>คุณมีคำถามอื่นๆ ที่ต้องการปรึกษาทางเราใช่หรือไม่</p>
              </div>
              <div class="col-lg-4 col-md-6 text-right">
                <a href="contact.html" class="filled-button">ติดต่อเรา</a>
              </div>
            </div>
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

          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/banner/Banner_Question.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <div class="questions-container">
              <div class="question">
                <button>
                  <span>1. ซื้อรถมือสองกับ RDD ต้องใช้อะไรบ้าง (ไฟแนนซ์)</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>1.1 บุคคลทั่วไป ต้องการซื้อรถมือสองผ่านไฟแนนซ์ ต้องเตรียมเอกสารดังนี้<br>
                  1. บัตรประชาชนฉบับจริงพร้อมสำเนา จำนวน 4 ชุด<br>
                  2. สำเนาทะเบียนบ้านจำนวน 4 ชุด<br>
                  3. สลิปเงินเดือนย้อนหลัง 6 เดือน หรือ หนังสือรับรองเงินเดือน(เลือกใช้อย่างใดอย่างหนึ่ง)<br>
                  4. สมุดบัญชีธนาคาร หรือ สเตทเม้นท์ย้อนหลัง 6 เดือน<br>
                </p>
              </div>
              <div class="question">
                <button>
                  <span>1. ซื้อรถมือสองกับ RDD ต้องใช้อะไรบ้าง (เงินสด)</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>1.2 บุคคลทั่วไปซื้อรถยนต์มือสองด้วยเงินสด หรือกรณีโอนลอย เอกสารที่ต้องเตรียมดังนี้<br>
                  1. บัตรประชาชนฉบับจริงพร้อมสำเนา จำนวน 4 ชุด<br>
                  2. สำเนาทะเบียนบ้านจำนวน 4 ชุด<br>
                  3.สมุดคู่มือจดทะเบียนเล่มจริง ที่แสดงชื่อเจ้าของรถยนต์ ข้อมูลของรถยนต์ และการต่อภาษี เพราะหากภาษีขาดการซื้อรถก็จะไม่มีทางเกิดขึ้นได้
                  เจ้าของรถต้องรับผิดชอบด้วยการชำระจ่ายภาษีให้ถูกต้อง<br>
                  4.แบบคำขอโอน เเละรับโอน เป็นเอกสารที่ต้องขอจากกรมการขนส่งทางบก หรือสามารถดาวน์โหลดจากเว็บไซต์ของกรมการขนส่งทางบกก็ได้ <br>
                  5.หนังสือมอบอำนาจ ใช้ในกรณีที่ทางผู้ขายหรือผู้ซื้อไม่สามารถมาดำเนินการเอง หรือหากมอบให้ตัวแทนดำเนินการแทน แนะนำให้ตรวจสอบชื่อผู้มอบอำนาจว่าตรงตามข้อมูลของผู้ขายหรือไม่
                </p>
              </div>

              <div class="question">
                <button>
                  <span>2. ทดลองขับได้ที่ไหนและเมื่อไหร่ ?</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• เวลา: ช่วงเช้า 9.00 - 13.00 น. หรือช่วงบ่าย 13.00 - 17.00 น.<br>
                  • สถานที่: RDD Car Center <br>
                  &nbsp; &nbsp; o คลิกเพื่อดูแผนที่ (ใส่ pop up แผนที่ RDD car center) <br>
                  &nbsp; &nbsp; o คลิก google map <br>
                </p>
              </div>

              <div class="question">
                <button>
                  <span>3. ค่าใช้จ่ายสำหรับการจองรถ</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• ค่าธรรมเนียมการจอง 5,000 บาท สำหรับรถยนต์ทุกคัน โดยไม่มีค่าใช้จ่ายเพิ่มเติม ทั้งนี้คุณจะได้รับเงินคืนอย่างเต็มจำนวนในกรณีที่การขอสินเชื่อรถยนต์ของคุณไม่ได้รับการอนุมัติจากสถาบันการเงิน</p>
              </div>
              <div class="question">
                <button>
                  <span>4. หากต้องการจองรถออนไลน์ ชำระค่าธรรมเนียมการจองอย่างไร?</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>&nbsp; &nbsp;• ขั้นตอนชำระเงิน: <br>
                  ขั้นตอนที่ 1: หน้ารายละเอียดของรถคลิกปุ่ม "จองรถคันนี้"<br>
                  ขั้นตอนที่ 2: คุณจะถูกนําไปหน้าใส่รายละเอียด ตรวจสอบความถูกต้องจากนั้นคลิกที่ปุ่ม <br> "ชําระค่าธรรมเนียมการจอง"<br>
                  ขั้นตอนที่ 3: เลือกวิธีการชําระเงินที่ต้องการ และยืนยันการชําระเงิน โดยชําระเงินให้เสร็จภายใน 30 นาที หลังจาก 30 นาทีระบบจะยกเลิกการจองรถ
                </p>
              </div>
              <div class="question">
                <button>
                  <span>5. ลูกค้าจะทราบได้อย่างไรว่าคําสั่งซื้อการจองรถได้รับการยืนยันแล้ว?</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• มีสอง 2 วิธีในการตรวจสอบดังนี้<br>
                </p>
              </div>
              <div class="question">
                <button>
                  <span>6. สามารถขอสินเชื่อด้วยตนเองได้หรือไม่ ?</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• คุณสามารถดำเนินการผ่านสถาบันการเงินที่คุณต้องการได้เลย</p>
              </div>
              <div class="question">
                <button>
                  <span>7. การจัดส่งรถยนต์ หรือการรับรถจาก RDD ? </span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• คุณสามารถรับรถจาก RDD โดยตรง ที่ RDD Car Center เทพารักษ์ <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.886894573339!2d100.6986145142697!3d13.603719504374215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5fc9920faaef%3A0x7621ddf93d26e8a0!2sRDD%20Car%20Center!5e0!3m2!1sth!2sth!4v1650103356335!5m2!1sth!2sth"></iframe><br>
                  • หรือหากคุณต้องการให้รถของคุณไปส่งที่บ้าน เจ้าหน้าที่ของ RDD สามารถช่วยคุณนัดหมาย <br>
                  จัดส่งได้โดยไม่เสียค่าใช้จ่าย*<br> (ในเขตกรุงเทพฯและปริมณฑล สำหรับการจัดส่งในต่างจังหวัดจะมีค่าใช้จ่ายเพิ่มเติม)
                </p>
              </div>
              <div class="question">
                <button>
                  <span>8. สามารถติดต่อ RDD ได้ในช่วงเวลาใด ?</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• RDD เปิดให้บริการทุกวันจันทร์ - วันอาทิตย์ ตั้งแต่เวลา 9.00 - 17.00 น. <br>
                  • โดยสามารถติดต่อเจ้าหน้าของ RDD ผ่านช่องทาง Online ได้ทุกวันที่ <a href="https://www.facebook.com/rddcarcenter">Facebook</a><br>
                  ตั้งแต่เวลา 9.00 น. - 20.00 น. สอบถามเพิ่มเติม โทร. 0655409988
                </p>
              </div>
            </div>
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
            <h2>เกี่ยวกับเรา</h2>
          </div>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="left-content">
            <p><a href="#">RDD หรือรถดีเด็ด</a> ผู้เชี่ยวชาญด้านรถมือสอง
              โดยจัดจำหน่ายรถยนต์หมดสัญญาเช่าจาก บริษัท อาคเนย์แคปปิตอล จำกัด
              ซึ่งเป็นบริษัทฯ รถเช่าองค์กรชั้นนำอันดับหนึ่งของประเทศไทย จึงมั่นใจได้ว่า รถจาก
              RDD ผ่านการตรวจสอบสภาพโดยบริษัทฯ ชั้นนำจึงรถบริษัทฯ
              มือเดียวสภาพเยี่ยม รับประกันเลขไมล์แท้
              สามารถตรวจสอบประวัติการเข้าศูนย์ได้ทุกคัน
              การันตีไม่ย้อมแมวโดยมีรถให้เลือกมากมายหลายรุ่น RDD
              ยังมีบริการปรึกษาการจัดไฟแนนซ์ ช่วยดันให้ผ่านทุกเคส พร้อมฟรี ! Auto Warranty
              และ บริการช่วยเหลือฉุกเฉินบนท้องถนนตลอด 24 ชั่วโมง</p>
          </div>
        </div>
        <div class="col-md-2">
        </div>
        <!-- <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/about-1-570x350.jpg" alt="">
          </div>
        </div> -->
      </div>
    </div>
  </div>






  <div class="container" style="background-color: #F0F8FF;">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <p></p>
          <h2 style="text-align: center;"> <img src="assets/images/logoRDD.png" width="100px">สอบถามข้อมูลเพิ่มเติม</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="ชื่อของคุณ" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="tel" type="text" class="form-control" id="tel" placeholder="เบอร์ของคุณ" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="อีเมลล์ของคุณ" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" class="form-control" id="subject" placeholder="เรื่อง" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="ข้อความของคุณ" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  <br><br>
                </fieldset>
              </div>

            </div>
          </form>
        </div>
      </div>
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

  <div class="cookie_wrapper">
    <!-- <img src="assets/images/cookie.png" alt=""> -->
    <div class="cookie_content">
      <!-- <header>Cookies Consent</header> -->
      <p>เราใช้คุกกี้ที่มีความจำเป็นอย่างยิ่งต่อการทำงานของเว็บไซต์ของเรา โดยเราจะไม่ใช้คุกกี้ทางเลือกจนกว่าท่านจะอนุญาตให้เราเปิดใช้งานคุกกี้ดังกล่าว
        หากท่านกดยอมรับคุกกี้ทั้งหมด จะหมายความว่าท่านยินยอมให้เราบันทึกและใช้คุกกี้ทั้งหมดจากอุปกรณ์ที่ท่านใช้ในการเข้าเว็บไซต์ของเรา </p>
      <div class="cookie_buttons">
        <button class="item">ยอมรับคุกกี้ทั้งหมด</button>
        <a href="#" class="item">Learn more</a>
      </div>
    </div>
  </div>

  <script>
    const cookieBox = document.querySelector(".cookie_wrapper"),
      acceptBtn = cookieBox.querySelector(".cookie_buttons button");

    acceptBtn.onclick = () => {
      document.cookie = "CookieBy=CodingNepal; max-age=" + 60 * 60 * 24 * 30;
      if (document.cookie) {
        cookieBox.classList.add("hide");
      } else {
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal");
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <!-- external js-->
  <script src="main.js"></script>

  


</body>

</html>