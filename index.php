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
  <link rel="stylesheet" href="assets/css/c4.css">

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
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item active">
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
            <li class="nav-item"><a class="nav-link" href="contact.php">ติดต่อเรา</a></li>
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
  

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/selector-custom.js"></script>
  

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="_1bWR_">
          <li class="ykp-v">
              <div id="quotedPrice" class="filter-section _1NTuv">
                  <span>ราคา / สินเชื่อ</span>
                  <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                      <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                  </span>
                  <noscript></noscript>
              </div>
              <div id="filter-section-1" class="filter-section _1PX-6 _2oMKC selected-hidden">
                <div class="dJM1f">
                  <div>
                    <ul class="_2UW6U" style="border: 0;">
                      <li class="_3RNrO">ราคา</li>
                      <!-- <li class="">สินเชื่อ</li> -->
                    </ul>
                    <div class="qSoQe">
                      <div class="_3piiG">
                        <div class="_3XI6w ">
    
                        </div>
                        <div class="_2rAGP" style="background-color: rgb(221, 229, 235);"></div>
                        <div>
                          <div style="left: 0%; position: absolute; transform: translate(-50%, -50%); -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 5; width: 28px; height: 42px; cursor: pointer;"></div>
                          <div role="slider" aria-valuemin="234330" aria-valuemax="4447000" aria-valuenow="234330" class="Zy7Ma" style="left: 0%; width: 18px; height: 18px;"></div>
                          <div style="left: 100%; position: absolute; transform: translate(-50%, -50%); -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 5; width: 28px; height: 42px; cursor: pointer;"></div>
                          <div role="slider" aria-valuemin="234330" aria-valuemax="4447000" aria-valuenow="4447000" class="Zy7Ma" style="left: 100%; width: 18px; height: 18px;"></div>
                        </div>
                        <div>
                          <div class="_3CS2R " style="background-color: rgb(0, 90, 150); left: 0%; width: 100%;"></div>
                        </div>
                        <div></div>
                      </div>
                    </div>
                    <div class="_1FbBE">
                      <span class="_-31RR">234,330 THB  </span>
                      <span class="text-right _-31RR">4,447,000 THB </span>
                    </div>
                    <div class="_1J_9o KMM5g">
                      <span class="_1_a5T">ราคาต่ำสุด</span>
                      <span class="_1_a5T _1U2dX">ราคาสูงสุด</span>
                    </div>
                    <div class="_1J_9o KMM5g">
                      <div class="_1YZXX">
                        <span class="_3ZvTZ">THB</span>
                        <input class="_3g8vv" type="" value="234,330">
                      </div>
                      <div class="_1PFA-"></div>
                      <div class="_1YZXX">
                        <span class="_3ZvTZ">THB</span>
                        <input class="_3g8vv" type="" value="4,447,000">
                      </div>
                    </div>
                  </div>
                  <div class="_1T_8I">
                    <h5 class="_2T4Jz">แนะนำ</h5>
                    <div class="_2uvKK">
                      <ul class="_2dClB">
                        <li><div class="_3KIMX _2AGpP">ภายใต้ THB 400,000</div></li>
                        <li><div class="_3KIMX _2AGpP">THB 400k - 600k</div></li>
                        <li><div class="_3KIMX _2AGpP">THB 600k - 800k</div></li>
                        <li><div class="_3KIMX _2AGpP">สูงกว่า THB 800k</div></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="_1thrm">
                  <p class="_2ff4r">ตั้งค่าใหม่</p>
                  <button id="" type="button" class="btn _3BmFU AgO6q">
                    <span>ดูรถทั้ง 500 คัน</span>
                  </button>
                </div>
              </div>
              <!--#filter-section-1-->
          </li>
          <li class="ykp-v">
              <div id="make" class="filter-section _1NTuv">
                  <span>แบรนด์ / รุ่น</span>
                  <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                      <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                  </span>
                  <noscript></noscript>
              </div>
              <div id="filter-section-2" class="filter-section _1PX-6 _1nk3B selected-hidden">
                <div class="dJM1f">
                    <div class="_1yM7q">
                        <div class="_2Zl4w">
                            <div>
                                <div class="_2dhm_">
                                    <div class="form-group">
                                        <input type="text" placeholder="ค้นหาจากยี่ห้อรถ หรือรุ่นรภ" class="form-control _2V4t4" />
                                        <span class="_1iPJS"><img src="https://www.cars24.co.th/th/static/js/bb08031ec947ddaf70154f5b5cd38ff9.svg" alt="search" /></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_2CSxH">
                        <h5 class="_12XFe">แบรนด์ทั้งหมด</h5>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Toyota" name="option_Toyota" checked="" /><label for="option_Toyota"></label></div>
                                            <div class="_2tujG">
                                                <h3>Toyota</h3>
                                                <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                    <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                                                </span>
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Honda" name="option_Honda" /><label for="option_Honda"></label></div>
                                            <div class="_2tujG">
                                                <h3>Honda</h3>
                                                <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                    <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                                                </span>
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Isuzu" name="option_Isuzu" /><label for="option_Isuzu"></label></div>
                                            <div class="_2tujG">
                                                <h3>Isuzu</h3>
                                                <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                    <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                                                </span>
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Mitsubishi" name="option_Mitsubishi" /><label for="option_Mitsubishi"></label></div>
                                            <div class="_2tujG">
                                                <h3>Mitsubishi</h3>
                                                <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                    <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                                                </span>
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Nissan" name="option_Nissan" /><label for="option_Nissan"></label></div>
                                            <div class="_2tujG">
                                                <h3>Nissan</h3>
                                                <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                                                    <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                                                </span>
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Mazda" name="option_Mazda" /><label for="option_Mazda"></label></div>
                                            <div class="_2tujG">
                                                <h3>Mazda</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Ford" name="option_Ford" /><label for="option_Ford"></label></div>
                                            <div class="_2tujG">
                                                <h3>Ford</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Suzuki" name="option_Suzuki" /><label for="option_Suzuki"></label></div>
                                            <div class="_2tujG">
                                                <h3>Suzuki</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_MG" name="option_MG" /><label for="option_MG"></label></div>
                                            <div class="_2tujG">
                                                <h3>MG</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_BMW" name="option_BMW" /><label for="option_BMW"></label></div>
                                            <div class="_2tujG">
                                                <h3>BMW</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Mercedes-Benz" name="option_Mercedes-Benz" /><label for="option_Mercedes-Benz"></label></div>
                                            <div class="_2tujG">
                                                <h3>Mercedes-Benz</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Chevrolet" name="option_Chevrolet" /><label for="option_Chevrolet"></label></div>
                                            <div class="_2tujG">
                                                <h3>Chevrolet</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Volvo" name="option_Volvo" /><label for="option_Volvo"></label></div>
                                            <div class="_2tujG">
                                                <h3>Volvo</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <ul>
                            <div class="_1_rkM">
                                <li>
                                    <div class="aKAJx">
                                        <div class="_11CPT">
                                            <div class="_2dra0"><input type="checkbox" id="option_Mini" name="option_Mini" /><label for="option_Mini"></label></div>
                                            <div class="_2tujG">
                                                <h3>Mini</h3>
                                                <span class="lazy-load-image-background blur" style="display: inline-block;"><span class="" style="display: inline-block; transform: rotate(90deg);"></span></span><noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="_1thrm">
                    <p class="_2ff4r">ตั้งค่าใหม่</p>
                    <button id="" type="button" class="btn _3BmFU AgO6q"><span>ดูรถทั้ง 1,395 คัน</span></button>
                </div>
            </div>
            
          </li>
          <li class="ykp-v">
              <div id="year" class="filter-section _1NTuv">
                  <span>ปี</span>
                  <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                      <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                  </span>
                  <noscript></noscript>
              </div>

              <div id="filter-section-3" class="filter-section _1PX-6 _28yLL selected-hidden">
                <div class="dJM1f">
                    <div class="_3iGvB">
                        <div class="_3piiG">
                            <div class="_3XI6w "></div>
                            <div class="_2rAGP" style="background-color: rgb(221, 229, 235);"></div>
                            <div>
                                <div style="left: 0%; position: absolute; transform: translate(-50%, -50%); -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 5; width: 28px; height: 42px; cursor: pointer;"></div>
                                <div role="slider" aria-valuemin="2013" aria-valuemax="2021" aria-valuenow="2013" class="Zy7Ma" style="left: 0%;"></div>
                                <div style="left: 100%; position: absolute; transform: translate(-50%, -50%); -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 5; width: 28px; height: 42px; cursor: pointer;"></div>
                                <div role="slider" aria-valuemin="2013" aria-valuemax="2021" aria-valuenow="2021" class="Zy7Ma" style="left: 100%;"></div>
                            </div>
                            <div>
                                <div class="_3CS2R " style="left: 0%; width: 100%; background-image: linear-gradient(269deg, rgb(237, 106, 0), rgb(246, 155, 0));"></div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="_1FwIU"><span class="_27c0Z"> 2013  </span><span class="text-right _27c0Z"> 2021 </span></div>
                    <div class="_1J_9o KMM5g"><span class="_1_a5T">ปีต่ำสุด</span><span class="_1_a5T _1U2dX">ปีสูงสุด</span></div>
                    <div class="_1J_9o KMM5g">
                        <div class="_23mXK">
                            <div class="inputText _6QaMX"><input id="" type="text" name="" maxlength="100" autocomplete="off" class="form-control " value="2013"></div>
                        </div>
                        <div class="_25rvk"></div>
                        <div class="_23mXK">
                            <div class="inputText _6QaMX"><input id="" type="text" name="" maxlength="100" autocomplete="off" class="form-control " value="2021"></div>
                        </div>
                    </div>
                    <div class="_3IbNS">
                        <h5 class="fFHxS">แนะนำ</h5>
                        <ul class="_24FPU">
                            <li>
                                <div class="_3KIMX">2016 - 2018</div>
                            </li>
                            <li>
                                <div class="_3KIMX">2018 - 2020</div>
                            </li>
                            <li>
                                <div class="_3KIMX">2020 - 2021</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="_1thrm">
                    <p class="_2ff4r">ตั้งค่าใหม่</p><button id="" type="button" class="btn _3BmFU AgO6q"><span>ดูรถทั้ง 1,395 คัน</span></button></div>
            </div>
          </li>
          <li class="ykp-v">
              <div id="odometerReading" class="filter-section _1NTuv">
                  <span>เลขไมล์ </span>
                  <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                      <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                  </span>
                  <noscript></noscript>
              </div>
              <div id="filter-section-4" class="filter-section _1PX-6 _1O1yT selected-hidden">
                <div class="dJM1f">
                    <div class="_3iGvB">
                        <div class="_3piiG">
                            <div class="_3XI6w "></div>
                            <div class="_2rAGP" style="background-color: rgb(221, 229, 235);"></div>
                            <div>
                                <div style="left: 0%; position: absolute; transform: translate(-50%, -50%); -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 5; width: 28px; height: 42px; cursor: pointer;"></div>
                                <div role="slider" aria-valuemin="0" aria-valuemax="193000" aria-valuenow="0" class="Zy7Ma" style="left: 0%;"></div>
                                <div style="left: 100%; position: absolute; transform: translate(-50%, -50%); -webkit-tap-highlight-color: rgba(0, 0, 0, 0); z-index: 5; width: 28px; height: 42px; cursor: pointer;"></div>
                                <div role="slider" aria-valuemin="0" aria-valuemax="193000" aria-valuenow="193000" class="Zy7Ma" style="left: 100%;"></div>
                            </div>
                            <div>
                                <div class="_3CS2R " style="left: 0%; width: 100%; background-image: linear-gradient(269deg, rgb(237, 106, 0), rgb(246, 155, 0));"></div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="_1FwIU"><span class="_27c0Z"> 0 KM </span><span class="text-right _27c0Z"> 193,000 KM</span></div>
                    <div class="_1J_9o KMM5g"><span class="_1_a5T">เลขไมล์ต่ำสุด</span><span class="_1_a5T _1U2dX">เลขไมล์สูงสุด</span></div>
                    <div class="_1J_9o KMM5g">
                        <div class="_23mXK">
                            <div class="inputText _6QaMX"><input id="" type="text" name="" maxlength="100" autocomplete="off" class="form-control " value="0"></div>
                        </div>
                        <div class="_25rvk"></div>
                        <div class="_23mXK">
                            <div class="inputText _6QaMX"><input id="" type="text" name="" maxlength="100" autocomplete="off" class="form-control " value="193,000"></div>
                        </div>
                    </div>
                    <div class="_3IbNS">
                        <h5 class="fFHxS">แนะนำ</h5>
                        <ul class="_24FPU">
                            <li>
                                <div class="_3KIMX">ภายใต้ 20,000 kms</div>
                            </li>
                            <li>
                                <div class="_3KIMX">ภายใต้ 40,000 kms</div>
                            </li>
                            <li>
                                <div class="_3KIMX">ภายใต้ 60,000 kms</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="_1thrm">
                    <p class="_2ff4r">ตั้งค่าใหม่</p><button id="" type="button" class="btn _3BmFU AgO6q"><span>ดูรถทั้ง 1,395 คัน</span></button></div>
            </div>
          </li>
          <li class="ykp-v">
              <div id="moreInlineFilter" class="filter-section _1NTuv">
                  <span>ตัวกรองอื่นๆ</span>
                  <span class="lazy-load-image-background blur lazy-load-image-loaded" style="display: inline-block;">
                      <img src="https://www.cars24.co.th/th/static/js/00716384cb16cced75b0da453299e9ee.svg" style="transform: rotate(90deg);" />
                  </span>
                  <noscript></noscript>
              </div>

              <div id="filter-section-5" class="filter-section _1PX-6 _2IgOS selected-hidden">
                <div class="_2BnAd lT0xu">
                    <!-- <div>
                        <div class="_2VUmW">
                            <div class="_2QA20">
                                <ul class="_2VWwG">
                                    <li class="_3loOB">
                                        <div href="">สี </div>
                                    </li>
                                    <li class="">
                                        <div href="">เชื้อเพลิง </div>
                                    </li>
                                    <li class="">
                                        <div href="">ระบบเกียร์ </div>
                                    </li>
                                    <li class="">
                                        <div href="">ประเภทรถ </div>
                                    </li>
                                    <li class="">
                                        <div href="">ระบบขับเคลื่อน </div>
                                    </li>
                                    <li class="">
                                        <div href="">ประตู / ที่นั่ง </div>
                                    </li>
                                    <li class="">
                                        <div href="">ลดราคาพิเศษ </div>
                                    </li>
                                    <li class="">
                                        <div href="">ศูนย์ CARS24 </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="_2ouZp" style="margin-left: 0;">
                        <div>
                            <div class="_3ldiG"  style="margin-left: 0;">
                                <h3 class="_3ffWY">สี</h3>
                                <ul class="_29CpZ">
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="ขาว" name="ขาว"><label for="ขาว"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_3NN-d"></span></span>ขาว</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="ดำ" name="ดำ"><label for="ดำ"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_2kftu"></span></span>ดำ</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="เทา" name="เทา"><label for="เทา"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_1mx7t"></span></span>เทา</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="บรอนซ์" name="บรอนซ์"><label for="บรอนซ์"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_2VQQh"></span></span>บรอนซ์</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="น้ำเงิน" name="น้ำเงิน"><label for="น้ำเงิน"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_2pFgF"></span></span>น้ำเงิน</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="แดง" name="แดง"><label for="แดง"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="A2GFd"></span></span>แดง</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="น้ำตาล" name="น้ำตาล"><label for="น้ำตาล"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_32_kn"></span></span>น้ำตาล</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="ส้ม" name="ส้ม"><label for="ส้ม"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="_3gq0V"></span></span>ส้ม</div>
                                    </li>
                                    <li><strong><div class="_2dra0"><input type="checkbox" id="อื่นๆ" name="อื่นๆ"><label for="อื่นๆ"></label></div></strong>
                                        <div class="_26-J8"><span class="_2JblL"><span class="hl-Ei"></span></span>อื่นๆ</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <!-- <div class="_3ldiG">
                                <h3 class="_3ffWY">เชื้อเพลิง</h3>
                                <ul class="sVtBG _7AhJm IiurH">
                                    <li>
                                        <div class="checkboxHolder _2l1Jf"><input type="checkbox" id="เบนซินfuelType" name=""><label for="auto"></label></div>
                                        <div class="_1m_PP"><span class="_1nL2Y"><img src="https://www.cars24.co.th/th/static/js/b15e83be9a00f77c1fe2373a9dd1c805.svg"></span><span class="_1mrc0">เบนซิน</span></div>
                                    </li>
                                    <li>
                                        <div class="checkboxHolder _2l1Jf"><input type="checkbox" id="ดีเซลfuelType" name=""><label for="auto"></label></div>
                                        <div class="_1m_PP"><span class="_1nL2Y"><img src="https://www.cars24.co.th/th/static/js/fb76f0e018ba8fbf581e806338bdd17f.svg"></span><span class="_1mrc0">ดีเซล</span></div>
                                    </li>
                                    <li>
                                        <div class="checkboxHolder _2l1Jf"><input type="checkbox" id="ไฮบริดfuelType" name=""><label for="auto"></label></div>
                                        <div class="_1m_PP"><span class="_1nL2Y"><img src="https://www.cars24.co.th/th/static/js/4f61c676ae080df8de93935629f58a38.svg"></span><span class="_1mrc0">ไฮบริด</span></div>
                                    </li>
                                    <li>
                                        <div class="checkboxHolder _2l1Jf"><input type="checkbox" id="ไฟฟ้าfuelType" name=""><label for="auto"></label></div>
                                        <div class="_1m_PP"><span class="_1nL2Y"><img src="https://www.cars24.co.th/th/static/js/0adc195712a4e68f63bc681c192a4867.svg"></span><span class="_1mrc0">ไฟฟ้า</span></div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="_3ldiG">
                                <h3 class="_3ffWY">ลดราคาพิเศษ</h3>
                                <ul class="sVtBG">
                                    <li class="_3hSKF">
                                        <div class="_2dra0"><input type="checkbox" id="รถยนต์ที่ลดราคาพิเศษ" name=""><label for="รถยนต์ที่ลดราคาพิเศษ"></label></div>
                                        <div class="_1o5VG">รถยนต์ที่ลดราคาพิเศษ</div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <div>
                            <div class="_3ldiG">
                                <h3 class="_3ffWY">ระบบเกียร์</h3>
                                <div class="_3S69k">
                                    <div class="_2eTJb">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="transmissionTypeเกียร์อัตโนมัติ" name="transmissionTypeเกียร์อัตโนมัติ"><label for="transmissionTypeเกียร์อัตโนมัติ"></label></div></strong></div>
                                        <div class="_3oLN7">เกียร์อัตโนมัติ</div>
                                    </div>
                                    <div class="_2eTJb">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="transmissionTypeเกียร์ธรรมดา" name="transmissionTypeเกียร์ธรรมดา"><label for="transmissionTypeเกียร์ธรรมดา"></label></div></strong></div>
                                        <div class="_3oLN7">เกียร์ธรรมดา</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- <div class="_3ldiG">
                                <h3 class="_3ffWY">ประเภทรถ</h3>
                                <ul class="sVtBG _7AhJm">
                                    <li>
                                        <div class="_1m_PP"><span class="_1nL2Y _17uJS"><img src="https://www.cars24.co.th/th/static/js/5ea1c908dc78004f8b5938319d75b10b.svg"></span><span class="_1mrc0">รถเก๋ง 4 ประตู</span></div>
                                    </li>
                                    <li>
                                        <div class="_1m_PP"><span class="_1nL2Y _17uJS"><img src="https://www.cars24.co.th/th/static/js/011fae70a431e3b54337c4ecda2edb95.svg"></span><span class="_1mrc0">รถกระบะ</span></div>
                                    </li>
                                    <li>
                                        <div class="_1m_PP"><span class="_1nL2Y _17uJS"><img src="https://www.cars24.co.th/th/static/js/6e99b56a701c6b33513c3ed5fd6fecdd.png"></span><span class="_1mrc0">รถเก๋ง 5 ประตู</span></div>
                                    </li>
                                    <li>
                                        <div class="_1m_PP"><span class="_1nL2Y _17uJS"><img src="https://www.cars24.co.th/th/static/js/85b73be73930f19663cdab1fd1080920.svg"></span><span class="_1mrc0">SUV</span></div>
                                    </li>
                                    <li>
                                        <div class="_1m_PP"><span class="_1nL2Y _17uJS"><img src="https://www.cars24.co.th/th/static/js/84550e971e82448925e5058f0d2db357.svg"></span><span class="_1mrc0">7 Seater</span></div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="_3ldiG">
                                <h3 class="_3ffWY">ระบบขับเคลื่อน</h3>
                                <div class="_3U7hX">
                                    <div class="_13hrx">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="ขับเคลื่อนล้อหน้าdriveType" name="ขับเคลื่อนล้อหน้าdriveType"><label for="ขับเคลื่อนล้อหน้าdriveType"></label></div></strong></div>
                                        <div class="CSh1g">ขับเคลื่อนล้อหน้า</div>
                                    </div>
                                    <div class="_13hrx">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="ขับเคลื่อนล้อหลังdriveType" name="ขับเคลื่อนล้อหลังdriveType"><label for="ขับเคลื่อนล้อหลังdriveType"></label></div></strong></div>
                                        <div class="CSh1g">ขับเคลื่อนล้อหลัง</div>
                                    </div>
                                    <div class="_13hrx">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="ขับเคลื่อนสี่ล้อ AWDdriveType" name="ขับเคลื่อนสี่ล้อ AWDdriveType"><label for="ขับเคลื่อนสี่ล้อ AWDdriveType"></label></div></strong></div>
                                        <div class="CSh1g">ขับเคลื่อนสี่ล้อ AWD</div>
                                    </div>
                                    <div class="_13hrx">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="ขับเคลื่อนสี่ล้อ 4WDdriveType" name="ขับเคลื่อนสี่ล้อ 4WDdriveType"><label for="ขับเคลื่อนสี่ล้อ 4WDdriveType"></label></div></strong></div>
                                        <div class="CSh1g">ขับเคลื่อนสี่ล้อ 4WD</div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="_3ldiG">
                                <div class="_2cchM">
                                    <h3 class="_3ffWY">ประตู</h3>
                                    <div class="_1lGuB">
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="2doors" name="2doors"><label for="2doors"></label></div></strong></div>
                                            <div class="CSh1g">2</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="3doors" name="3doors"><label for="3doors"></label></div></strong></div>
                                            <div class="CSh1g">3</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="4doors" name="4doors"><label for="4doors"></label></div></strong></div>
                                            <div class="CSh1g">4</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="5doors" name="5doors"><label for="5doors"></label></div></strong></div>
                                            <div class="CSh1g">5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2cchM">
                                    <h3 class="_3ffWY">ที่นั่ง</h3>
                                    <div class="_1lGuB">
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="2seats" name="2seats"><label for="2seats"></label></div></strong></div>
                                            <div class="CSh1g">2</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="3seats" name="3seats"><label for="3seats"></label></div></strong></div>
                                            <div class="CSh1g">3</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="4seats" name="4seats"><label for="4seats"></label></div></strong></div>
                                            <div class="CSh1g">4</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="5seats" name="5seats"><label for="5seats"></label></div></strong></div>
                                            <div class="CSh1g">5</div>
                                        </div>
                                        <div class="_28frD">
                                            <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="7seats" name="7seats"><label for="7seats"></label></div></strong></div>
                                            <div class="CSh1g">7</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="_3ldiG">
                                <h3 class="_3ffWY">ศูนย์ CARS24</h3>
                                <div class="_3kpbT">
                                    <div class="_9AXkW">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="CARS24 TBN Lat Krabanghub" name="CARS24 TBN Lat Krabanghub"><label for="CARS24 TBN Lat Krabanghub"></label></div></strong></div>
                                        <div class="_3K7Kz">CARS24 TBN Lat Krabang (988)</div>
                                    </div>
                                    <div class="_9AXkW">
                                        <div class="checkboxHolder"><strong><div class="_2dra0"><input type="checkbox" id="CARS24 PTT Petrahub" name="CARS24 PTT Petrahub"><label for="CARS24 PTT Petrahub"></label></div></strong></div>
                                        <div class="_3K7Kz">CARS24 PTT Petra (408)</div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="_1thrm"> -->
                    <!-- <p class="_2ff4r">ตั้งค่าใหม่</p><button id="" type="button" class="btn _3BmFU AgO6q"><span>ดูรถทั้ง 1,395 คัน</span></button></div> -->
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <link rel="stylesheet" href="css/selector-custom.css">


  <!-- Content Used car -->
  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">

            <h2 style="text-align: center;"> <img src="assets/images/new.png" width="100px">อัพเดตรถใหม่</h2>
            <a href="cars.php" style="font-size: large; color: blue">ดูรถเพิ่ม <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item">
            <a href="car-details1.html"><img src="assets/images/501.jfif" alt=""></a>

            <div class="down-content">

              <a href="car-details1.html">
                <h4>2016 BENZ E300</h4>
              </a>

              <h6> 890,000.00 บาท</h6>

              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 130,009 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>&nbsp;&nbsp;
              <!-- <button style="background-color: #1D295B ;">ดูเพิ่ม +</button> -->
              <a href="car-details1.html" class="filled-button1">ดูเพิ่มเติม หรือ สนใจคลิก</a>
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

              <h6> 349,000.00 บาท</h6>

              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 79,086 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 1600 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>
              <a href="car-details2.html" class="filled-button1">ดูเพิ่มเติม หรือ สนใจคลิก</a>
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

              <h6>459,000.00 บาท</h6>

              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->

              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 61,317 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2500 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> MT</strong>
              </small>
              <a href="car-details3.html" class="filled-button1">ดูเพิ่มเติม หรือ สนใจคลิก</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content Used car End-->


 
  
  <!-- Promo area -->
  <div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="text-align: center;"> <img src="assets/images/pro.png" width="100px">โปรโมชั่นพิเศษ</h2>
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
              <h6><small><del> 1,090,000.00 บาท</del></small> 889,000.00 บาท</h6>
              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 84,718 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 3000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือ สนใจคลิก</a>
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
              <h6><small><del> 989,000.00 บาท</del></small> 859,000.00 บาท</h6>
              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 102,000 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> AT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือ สนใจคลิก</a>
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
              <h6><small><del> 2,590,000.00 บาท</del></small> 2,090,000.00 บาท</h6>
              <!-- <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p> -->
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> 138,887 km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> 2000 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> MT</strong>
              </small>
              <a href="cars.html" class="filled-button1">ดูเพิ่มเติม หรือ สนใจคลิก</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End promo area -->

  <!-- คำนวนค่างวดรถ -->
  <div class="call-to-action" style="background-color: #f7f7f7;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-12">
                <h3>คำนวนค่างวดรถ</h3>

              </div>
              <div class="col-lg-4 col-md-6 text-right">
                <a href="fn-final.php" class="filled-button1">คลิก</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  


  <!-- News and Tips -->
  <div class="services" >
    <div class="team-members">
      <div class="container">
        <section>
          <div class="row gx-lg-6">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0  py-3 px-3" style="background-color: beige;">
              <h3>NEWS</h3>
              <br>
              <!-- News block -->
              <?php
                $query = mysqli_query($con, "SELECT * FROM news WHERE id_news=1");
                
                while($result = mysqli_fetch_array($query)) { ?>
              <div style="color: blue">
                <!-- Featured image -->
                <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                  <img src="<?=$result['pic_news']?>" class="img-fluid" />
                  <a href="new-details.php?id=<?=$result['id_news']?>">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Article data -->
                <div class="row mb-3">
                  <div class="col-12">
                    <u><?=$result['date_news']?></u>
                  </div>
                </div>

                <!-- Article title and description -->
                <a href="new-details.php?id=<?=$result['id_news']?>" class="text-dark">
                  <h4><?=$result['title_news']?></h4>

                  <p><?=$result['detail_show_news']?></p>
                </a>
                <?php } ?>
                <hr />

                <?php
                $query = mysqli_query($con, "SELECT * FROM news WHERE id_news>1 ORDER BY id_news ASC");
                
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

            <!-- <div class="col-lg-2 col-md-12 mb-4 mb-lg-0">
            </div> -->

            <div class="col-lg-6 col-md-6 mb-4 mb-lg-0  py-3 px-3" style="background-color: #F0F8FF; ">
              <h3>TIPS</h3>
              <br>
              <!-- News block -->
              <?php
                $query1 = mysqli_query($con, "SELECT * FROM tips WHERE id_tips=1");
                
                while($result1 = mysqli_fetch_array($query1)) { 
                  ?>
              <div>
                <!-- Featured image -->
                <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                  <img src="<?=$result1['pic_tips']?>" class="img-fluid" alt="" />
                  <a href="tips-details.php?id=<?=$result1['id_tips']?>">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Article data -->
                <div class="row mb-3">
                  <div class="col-12">
                    <u><?=$result1['date_tips']?></u>
                  </div>
                </div>

                <!-- Article title and description -->
                <a href="tips_details.php?id=<?=$result1['id_tips']?>" class="text-dark">
                  <h4><?=$result1['title_tips']?></h4>
                  <p><?=$result1['detail_show_tips']?></p>
                </a>
                <?php } ?>

                <hr />

                <?php
                // $query1 = mysqli_query($con, "SELECT * FROM tips WHERE id_tips>1 ORDER BY id_tips ASC");
                $query1 = mysqli_query($con, "SELECT * FROM tips WHERE id_tips>1 ORDER BY id_tips ASC");
              
              while($result1 = mysqli_fetch_array($query1)){ 
                ?>

                <!-- News -->
                <a href="tips_details.php?id=<?=$result1['id_tips']?>" class="text-dark">
                  <div class="row mb-4 border-bottom pb-3">
                    <div class="col-3">
                      <img src="<?=$result1['pic_tips']?>" class="img-fluid shadow-1-strong rounded" alt="" />
                    </div>
                    <div class="col-9">
                      <p class="mb-2"><strong><?=$result1['title_tips']?></strong></p>
                      <p>
                        <u><?=$result1['date_tips']?></u>
                      </p>
                    </div>
                  </div>
                </a>
                <?php } ?>

              </div>
              <!-- News block -->
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>

  <!-- ติดต่อเรา -->
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
                <a href="contact.php" class="filled-button">ติดต่อเรา</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- คำถามพบบ่อย -->
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
                • บัตรประชาชนฉบับจริงพร้อมสำเนา จำนวน 4 ชุด<br>
                • สำเนาทะเบียนบ้านจำนวน 4 ชุด<br>
                • สลิปเงินเดือนย้อนหลัง 6 เดือน หรือ หนังสือรับรองเงินเดือน(เลือกใช้อย่างใดอย่างหนึ่ง)<br>
                • สมุดบัญชีธนาคาร หรือ สเตทเม้นท์ย้อนหลัง 6 เดือน<br>
                </p>
              </div>
              <div class="question">
                <button>
                  <span>1. ซื้อรถมือสองกับ RDD ต้องใช้อะไรบ้าง (เงินสด)</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>1.2 บุคคลทั่วไปซื้อรถยนต์มือสองด้วยเงินสด หรือกรณีโอนลอย เอกสารที่ต้องเตรียมดังนี้<br>
                • บัตรประชาชนฉบับจริงพร้อมสำเนา จำนวน 4 ชุด<br>
                • สำเนาทะเบียนบ้านจำนวน 4 ชุด<br>
                • สมุดคู่มือจดทะเบียนเล่มจริง ที่แสดงชื่อเจ้าของรถยนต์ ข้อมูลของรถยนต์ และการต่อภาษี เพราะหากภาษีขาดการซื้อรถก็จะไม่มีทางเกิดขึ้นได้
                  เจ้าของรถต้องรับผิดชอบด้วยการชำระจ่ายภาษีให้ถูกต้อง<br>
                • แบบคำขอโอน เเละรับโอน เป็นเอกสารที่ต้องขอจากกรมการขนส่งทางบก หรือสามารถดาวน์โหลดจากเว็บไซต์ของกรมการขนส่งทางบกก็ได้ <br>
                • หนังสือมอบอำนาจ ใช้ในกรณีที่ทางผู้ขายหรือผู้ซื้อไม่สามารถมาดำเนินการเอง หรือหากมอบให้ตัวแทนดำเนินการแทน แนะนำให้ตรวจสอบชื่อผู้มอบอำนาจว่าตรงตามข้อมูลของผู้ขายหรือไม่
                </p>
              </div>

              <div class="question">
                <button>
                  <span>2. ทดลองขับได้ที่ไหนและเมื่อไหร่ ?</span>
                  <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>• เวลา: ช่วงเช้า 9.00 - 13.00 น. หรือช่วงบ่าย 13.00 - 17.00 น.<br>
                  • สถานที่: RDD Car Center <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.886894573339!2d100.6986145142697!3d13.603719504374215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5fc9920faaef%3A0x7621ddf93d26e8a0!2sRDD%20Car%20Center!5e0!3m2!1sth!2sth!4v1650103356335!5m2!1sth!2sth"></iframe><br>
                  &nbsp; &nbsp; o Tel.<a href="tel:0212565887">021-256-5887</a>
                  
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

  <!-- เกี่ยวกับเรา -->
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

  <!-- สอบถามข้อมูลเพิ่มเติม -->
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





  <!-- footer -->
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

  <!-- cookie -->
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