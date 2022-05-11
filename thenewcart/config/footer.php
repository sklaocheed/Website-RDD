<?php 
include 'connect.php';
$sqlcat = "SELECT * FROM categories";
$resultcat = $conn->query($sqlcat);
?>

<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-about-us">
                        <h2>หมวดหมู่สินค้า</span></h2>
                        <?php 
                        while($rowcat = mysqli_fetch_array($resultcat)) {
                        ?>
                        <div class="footer-about-us">
                            <a href="product.php?catId=<?php echo $rowcat['catId']; ?>" target="_blank"><?php echo $rowcat['catName']; ?></a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-about-us">
                        <h2>ที่อยู่และ<span>ข้อมูลติดต่อ</span></h2>
                        <label>ที่อยู่ : Thailand Bkk </label><br>
                        <label>เบอร์โทร : 089-999-999</label><br>
                        <label>อีเมล : admin@localhost.com</label><br>
                        <label>Line : admin_n</label>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-about-us">
                        <h2>แผนที่</span></h2>
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15466.474393575507!2d101.06081688757321!3d14.275451274860869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311da3573cc63f97%3A0x16028fe971178fa8!2z4LiB4LmL4Lin4Lii4LmA4LiV4Li14LmL4Lii4Lin4LmA4Lib4LmH4LiU4LiV4Li44LmL4LiZ4Lia4Liy4LiH4Lit4LmJ4Lit!5e0!3m2!1sen!2sth!4v1606117258937!5m2!1sen!2sth" 
                        width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="jassets/s/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="assets/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="assets/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="assets/js/bxslider.min.js"></script>
	<script type="text/javascript" src="assets/js/script.slider.js"></script>