<?php
include('connect_sql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
  <link rel="stylesheet" href="assets/css/c2.css">
</head>
<body>
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
                $query = sqlsrv_query($con, "SELECT * FROM RDD_admin_news WHERE news_id=5");
                
                while($result = sqlsrv_fetch_array($query)) { ?>
              <div style="color: blue">
                <!-- Featured image -->
                <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                  <img src="assets/images/news/news-01.jpg" class="img-fluid" />
                  <a href="new-details.php?id=<?=$result['news_id']?>">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Article data -->
                <div class="row mb-3">
                  <div class="col-12">
                
                  </div>
                </div>

                <!-- Article title and description -->
                <a href="new-details.php?id=<?=$result['news_id']?>" class="text-dark">
                  <h4><?=$result['news_title']?></h4>
                  <p><?=$result['news_details']?></p>
                 

                  
                </a>
                <p><?=$result['news_date']?></p>
                <?php } ?>
                <hr />

         
              </div>
              <!-- News block -->
            </div>

            <!-- <div class="col-lg-2 col-md-12 mb-4 mb-lg-0">
            </div> -->

            
          </div>
        </section>
      </div>
    </div>

  </div>
</body>
</html>