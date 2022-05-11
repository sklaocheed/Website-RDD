<?php
session_start();
include 'connect.php';
error_reporting(0);
$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
$meQty = 0;
foreach($_SESSION['qty'] as $meItem){
$meQty = $meQty + $meItem;
}
}else{
$meQty=0;
}
$userid = $_SESSION['id'];
$role = $_SESSION['role_id'];

$sql = "SELECT * FROM products WHERE id order by id limit 4";
$resultp = $conn->query($sql); 

$sql2 = "SELECT * FROM products WHERE id order by id limit 2";
$result2 = $conn->query($sql2); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDD</title>

    <link rel="stylesheet" href="/thenewcart/assetsheader/css/style.css">
    <link rel="stylesheet" href="/thenewcart/assetsheader/css/fontawesome.css">
    <link rel="stylesheet" href="/thenewcart/assetsheader/css/owl.css">
</head>
<body>
    <!-- ***** Preloader Start ***** -->
  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <!-- <h2>R D D 
              &nbsp;<em>รถ ดี เด็ด</em>
            </h2> -->
            <h2><img src="assets/images/logoRDD.png" width="160px"  alt=""></h2>
          
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">หน้าหลัก
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" 
                  href="cars.html"
                  >ซื้อรถ</a></li>

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
                <li class="nav-item"><a class="nav-link" href="findcar.html">บริการหา</a></li>
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
</body>
</html>