<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body>
	<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a><?php echo $industri->name ?><span>Telp. <?php echo $industri->telp ?></span></a></h1>
			</div>



			<div class="nav-top">
				<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li ><a href="#" class="hyper "><span>Home</span></a></li>			
							<li><a href="<?php echo base_url() ?>" class="hyper"> <span>Kembali Ke Maps</span></a></li>
							<!-- <li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li> -->
						</ul>
					</div>
				</nav>
				
				<div class="clearfix"></div>
			</div>

		</div>			
	</div>
	<!---->

    <!-- Carousel
    	================================================== -->
    	<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	
    		<div class="carousel-inner" role="listbox">
    			<div class="item active">
    				<a href="kitchen.html"><img class="first-slide" src="<?php echo base_url() ?>assets/industri/images/ba.jpg" alt="First slide"></a>

    			</div>

    		</div>

    	</div>
    -->
    <!-- /.carousel -->



    <!--content-->
    <div class="kic-top ">
    	<div class="container">
    		<div class="spec ">
    			<h3>Contact</h3>
    			<div class="ser-t">
    				<b></b>
    				<span><i></i></span>
    				<b class="line"></b>
    			</div>
    		</div>
    		<div class=" contact-w3">	
    			<div class="col-md-5 contact-right">	
    				<img src="<?php echo base_url() ?>public/image/<?php echo $industri->photo ?>" class="img-responsive" alt="">

    			</div>
    			<div class="col-md-7 contact-left">
    				<h4><?php echo $industri->name ?></h4>
    				<ul class="contact-list">
    					<li> <i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $industri->address ?></li><br>  						<li> <i class="fa fa-phone" aria-hidden="true"></i><?php echo $industri->telp; ?></li>
    				</ul>
    			</div>

    			<!--Plug-in Initialisation-->
    		</div>

    	</div>




    	<!--content-->
    	<div class="product">
    		<div class="container">
    			<div class="spec ">
    				<h3>Products</h3>
    				<div class="ser-t">
    					<b></b>
    					<span><i></i></span>
    					<b class="line"></b>
    				</div>
    			</div>
    			<div class=" con-w3l agileinf">
    				<?php foreach ($product as $row) {?>
    					<div class="col-md-3 pro-1">
    						<div class="col-m">
    							<a href="#" data-toggle="modal" data-target="#myModal<?php echo $row->id_product?>" class="offer-img">
    								<img src="<?php echo base_url() ?>public/image/<?php echo $row->photo ?>" class="img-responsive" alt="">
    							</a>
    							<div class="mid-1">
    								<div class="women">
    									<h6><a href="single.html"><?php echo $row->name ?></a></h6>							
    								</div>
    								<div class="mid-2">
    									<p ><em class="item_price">Rp. <?php echo $row->froms ?> - Rp. <?php echo $row->untils; ?></em></p>
    									
    									<div class="clearfix"></div>
    								</div>
    								<div class="add">
    									<a class="btn btn-danger my-cart-btn my-cart-b" href="#" data-toggle="modal" data-target="#myModal<?php echo $row->id_product?>">Detail</a>
    								</div>

    								
    							</div>
    						</div>
    					</div>

    					<!-- product -->
    					<div class="modal fade" id="myModal<?php echo$row->id_product?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    						<div class="modal-dialog" role="document">
    							<div class="modal-content modal-info">
    								<div class="modal-header">
    									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
    								</div>
    								<div class="modal-body modal-spa">
    									<div class="col-md-5 span-2">
    										<div class="item">
    											<img src="<?php echo base_url() ?>public/image/<?php echo $row->photo ?>" class="img-responsive" alt="">
    										</div>
    									</div>
    									<div class="col-md-7 span-1 ">
    										<h3><?php echo $row->name ?></h3>
    										<div class="price_single">
    											<span class="reducedfrom ">Rp. <?php echo $row->froms ?> - Rp. <?php echo $row->untils ?></span>

    											<div class="clearfix"></div>
    										</div>
    										<h4 class="quick">Deskripsi:</h4>
    										<p class="quick_desc"><?php echo $row->description ?></p>

    										
    									</div>
    									<div class="clearfix"> </div>
    								</div>
    							</div>
    						</div>
    					</div>
    				<?php } ?>
    				<div class="clearfix"></div>
    			</div>
    		</div>
    	</div>
    	<!--footer-->
        <?php include 'footer.php'; ?>    	

        <!-- smooth scrolling -->
        <script type="text/javascript">
          $(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="<?php echo base_url() ?>assets/industri/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="<?php echo base_url() ?>assets/industri/js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function () {

			var goToCartIcon = function($addTocartBtn){
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500 , "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				affixCartIcon: true,
				checkoutCart: function(products) {
					$.each(products, function(){
						console.log(this);
					});
				},
				clickOnAddToCart: function($addTocart){
					goToCartIcon($addTocart);
				},
				getDiscountPrice: function(products) {
					var total = 0;
					$.each(products, function(){
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>





</body>
</html>