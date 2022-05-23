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

  <div class="container">
     <!-- FOR PADDING -->
     <!-- ส่วนนี้ ไม่ได้ใช้งาน สำหรับลูกค้าแก้ไขนะคะ -->
     <div class="py-5"></div>
  </div>

   <div class="container">
      <div class="row mt-5">
         <div class="col-12 col-md-6">
            <div id="finance_cal" class="finance-cal-container py-3">
               <p class="fs-4 mb-2"><strong>ราคารถ</strong></p>
               <div class="input-group mb-5">
                  <span class="input-group-text" style="background-color:#1D295B;color: #fff;">฿</span>
                  <input id="total_price_input" type="number" class="form-control" aria-label="Amount (to the nearest Baht)">
               </div><!--input-group-->
               <div class="input-group mb-5">
                  <p>
                     <label for="finance_payment" class="form-label">เงินดาวน์ (<span id="finance_down_payment_val">0</span>%) <strong style="padding-left: 30px;font-weight: bold; font-size: large;">฿ <span class="pl-2" id="finance_payment_car">0</span></strong></label>
                  </p>
                  <input type="range" class="form-range" min="0" max="50" step="1" id="finance_payment" value="0">
               </div><!--input-group-->
               <div class="input-group mb-5">
                  <label for="finance_interest" class="form-label">ดอกเบี้ย (<span id="finance_interest_val">0</span>%)</label>                  
                  <input type="range" class="form-range" min="0" max="10" step="0.1" id="finance_interest" value="0">
               </div><!--input-group-->
               <div class="input-group mb-5">
                  <label for="finance_year" class="form-label">จำนวนงวด (<span id="finance_year_val">1</span> ปี) <span class="pr-3"></span> <strong><span id="finance_month_val">12</span> งวด</strong></label>                  
                  <input type="range" class="form-range" min="1" max="8" step="1" id="finance_year" value="1">
               </div><!--input-group-->
            </div><!--finance-cal-container-->               
         </div><!--col-6-->
         <div class="col-12 col-md-6">
            <div class="result badge-light py-4 px-4 rounded-3 shadow-sm">
              <div class="cart_title">
                <p>                  
                  <span class="cart_title_text">ราคารถยนตร์</span>
                </p>
                <p>                  
                  <span class="cart_paymenttitle_text">เงินดาวน์</span>
                </p>
              </div>
              <div class="chart-element">
                  <div class="chart-element-content">
                    <p class="fw-bolder fs-6 mb-1" style="color: #888;">จำนวน</p>
                    <p class="fw-bolder fs-6 mb-1">฿ <span id="finance_payment_car2">0</span></p>
                    <p class="fw-bolder fs-6">฿ <span id="total_price_car">0</span></p>
                  </div>
                  <canvas id="myChart"></canvas>
              </div>
              <span id="total_price_car2" style="display: none;">0</span>
              <p class="fs-5 mb-3 d-flex flex-wrap align-items-center" style="display: none !important;">
                <span class="w-50">ราคารถยนต์</span>
                <span id="total_price_car" class="result_text  w-50 px-4 py-1 rounded-4 border border-1">0</span>              
              </p>               
              <p class="fs-5 mb-3 d-flex flex-wrap align-items-center">
                <span class="w-50">จำนวนสินเชื่อรถยนต์</span>
                <span id="finance_pay" class="result_text w-50 px-4 py-1 rounded-4 border border-1">0</span>
              </p>
              <p class="fs-5 mb-3 d-flex flex-wrap align-items-center">
                <span class="w-50">ค่างวดต่อเดือน : </span>
                <span id="finance_perMonth" class="result_text w-50 px-4 py-1 rounded-4 border border-1">0</span> 
               </p>               
            </div>               
         </div><!--col-6-->
      </div>
   </div>   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
      $(document).ready(function() {
         $("#finance_cal").keyup(function() {
            var totalPriceInput = $('#total_price_input').val();
            $('#total_price_car').text(addCommas(totalPriceInput));
            $('#total_price_car2').text(totalPriceInput);
            var finance_totalPrice = $('#total_price_car2').text();
            var financePaymentPercent = $('#finance_payment').val();  
            var financePayment = (financePaymentPercent / 100) * finance_totalPrice;
            $('#finance_payment_car').text(addCommas(financePayment.toFixed()));
            $('#finance_payment_car2').text(addCommas(financePayment.toFixed()));
            $('#finance_down_payment_val').text(addCommas(financePaymentPercent));
            $('#finance_pay').text(addCommas(finance_totalPrice - financePayment.toFixed()));
            var financeInterest = $('#finance_interest').val();
            $('#finance_interest_val').text(addCommas(financeInterest));
            var financeYear = $('#finance_year').val();
            $('#finance_year_val').text(financeYear);
            $('#finance_month_val').text(financeYear * 12);
            var finance_Payment = finance_totalPrice - financePayment.toFixed();
            var financePerMonth = ((finance_Payment + (finance_Payment*financeYear*(financeInterest/100))) / (financeYear*12));
            $('#finance_perMonth').text(addCommas(financePerMonth.toFixed(2)));
            myChart.data.datasets[0].data[0] = finance_Payment; 
            myChart.data.datasets[0].data[1] = financePayment; 
            myChart.update();
         });         
      });
      $(document).on('input', '#finance_cal', function() {
         var finance_totalPrice = $('#total_price_car2').text();
         var financePaymentPercent = $('#finance_payment').val();
         var financePayment = (financePaymentPercent / 100) * finance_totalPrice;
         $('#finance_payment_car').text(addCommas(financePayment.toFixed()));
         $('#finance_payment_car2').text(addCommas(financePayment.toFixed()));
         $('#finance_down_payment_val').text(addCommas(financePaymentPercent));
         $('#finance_pay').text(addCommas(finance_totalPrice - financePayment.toFixed()));
         var financeInterest = $('#finance_interest').val();
         $('#finance_interest_val').text(addCommas(financeInterest));
         var financeYear = $('#finance_year').val();
         $('#finance_year_val').text(financeYear);
         $('#finance_month_val').text(financeYear * 12);
         var finance_Payment = finance_totalPrice - financePayment.toFixed();
         var financePerMonth = ((finance_Payment + (finance_Payment*financeYear*(financeInterest/100))) / (financeYear*12));
         $('#finance_perMonth').text(addCommas(financePerMonth.toFixed(2)));
        myChart.data.datasets[0].data[0] = finance_Payment;
        myChart.data.datasets[0].data[1] = financePayment;
        myChart.update();
      });            
      function addCommas(x) {
          var parts = x.toString().split(".");
          parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          return parts.join(".");
      };

      $("input#total_price_input").each((i,ele)=>{
        let clone=$(ele).clone(false)
        clone.attr("type","text")
        let ele1=$(ele)
        clone.val(Number(ele1.val()).toLocaleString("en"))
        $(ele).after(clone)
        $(ele).hide()
        clone.mouseenter(()=>{
          ele1.show()
          clone.hide()
        })
        setInterval(()=>{
          let newv=Number(ele1.val()).toLocaleString("en")
          if(clone.val()!=newv){
            clone.val(newv)
          }
        },10)
        $(ele).mouseleave(()=>{
          $(clone).show()
          $(ele1).hide()
        })       
      });
   </script>
   
   <script>
    const data = {
      datasets: [{
        label: 'My First dataset',
        backgroundColor: [          
          'rgb(29,41,91)',
          'rgb(222,226,230)',          
        ],
        weight: 1,
        data: [1, 0],
      }]
    };
  
    const config = {
      type: 'doughnut',
      data: data,
    };
    </script>
    <script>
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>
   
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
  <!-- external js-->
  <script src="main.js"></script>


</body>

</html>