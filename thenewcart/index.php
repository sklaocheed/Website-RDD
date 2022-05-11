    <?php include 'config/head.php' ?>
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="assets/img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            <font color="white">Freitag</font> <span class="primary">6 <strong>Store</strong></span>
							</h2>
							<h4 class="caption subtitle"><font color="white">Dual SIM</font></h4>
							<a class="caption button-radius" href="/thenewcart/carts/category"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="assets/img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            <font color="white">by one, get one</font>  <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle"><font color="white">school supplies & backpacks.*</font></h4>
							<a class="caption button-radius" href="/thenewcart/carts/category"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="assets/img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            <font color="white">Freitag</font> <span class="primary">Store </span>
							</h2>
							<h4 class="caption subtitle"><font color="white">Select Item</font></h4>
							<a class="caption button-radius" href="/thenewcart/carts/category"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="assets/img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
                          <font color="white">Freitag</font> <span class="primary">Store </span>
							</h2>
							<h4 class="caption subtitle"><font color="white">& Phone</font></h4>
							<a class="caption button-radius" href="/thenewcart/carts/category"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>ประกันใน 30</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>ฟรีค่าจัดส่ง</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>มีความปลอดภัย</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>อัพเดทสินค้าใหม่ๆ </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">สินค้าขายดี</h2>
                        <?php 
                        while($row1 = mysqli_fetch_assoc($resultp)) { ?>
                        <div class="single-wid-product">
                            <a href="carts/productdetail.php?catId=<?php echo $catId; ?>&itemId=<?php echo $row1['id']; ?>"><img class="product-thumb" src="/thenewcart/dbadmin/assets/img/product/<?php echo $row1['product_img_name']; ?>"></a>
                            <h2><a href="carts/productdetail.php?catId=<?php echo $catId; ?>&itemId=<?php echo $row1['id']; ?>"><?php echo $row1['product_name']; ?></a></h2>
                           
                            <div class="product-wid-price">
                            <ins><?php echo $row1['product_price']; ?></ins>
                            </div>                            
                        </div>
                        <?php } ?> 
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">สินค้าใหม่</h2>
                        <?php 
                         while($row2 = mysqli_fetch_assoc($result2)) { ?>
                        <div class="single-wid-product">
                            <a href="carts/productdetail.php?catId=<?php echo $catId; ?>&itemId=<?php echo $row2['id']; ?>"><img src="/thenewcart/dbadmin/assets/img/product/<?php echo $row2['product_img_name']; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="carts/productdetail.php?catId=<?php echo $catId; ?>&itemId=<?php echo $row2['id']; ?>"><?php echo $row2['product_name']; ?></a></h2>
                            <div class="product-wid-price">
                            <ins><?php echo $row2['product_price']; ?></ins>
                            </div>                            
                        </div>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <?php include 'config/footer.php' ?>
  </body>
</html>