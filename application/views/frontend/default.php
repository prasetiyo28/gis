<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Kitchen :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="Vide" />
	<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url() ?>assets/industri/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url() ?>assets/industri/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="<?php echo base_url() ?>assets/industri/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/industri/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/industri/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url() ?>assets/industri/css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="<?php echo base_url() ?>assets/industri/js/jstarbox.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/industri/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
	jQuery(function() {
		jQuery('.starbox').each(function() {
			var starbox = jQuery(this);
			starbox.starbox({
				average: starbox.attr('data-start-value'),
				changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
				ghosting: starbox.hasClass('ghosting'),
				autoUpdateAverage: starbox.hasClass('autoupdate'),
				buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
				stars: starbox.attr('data-star-count') || 5
			}).bind('starbox-value-changed', function(event, value) {
				if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
				} 
			})
		});
	});
</script>
<!---//End-rate---->

</head>
<body>
	<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.html"><?php echo $industri->name ?><span>Telp. <?php echo $industri->telp ?></span></a></h1>
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
							<li ><a href="index.html" class="hyper "><span>Home</span></a></li>			
							<li><a href="codes.html" class="hyper"> <span>Kembali Ke Maps</span></a></li>
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
    							<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
    								<img src="<?php echo base_url() ?>public/image/product/<?php echo $row->photo ?>" class="img-responsive" alt="">
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
    									<a class="btn btn-danger my-cart-btn my-cart-b" href="#" data-toggle="modal" data-target="#myModal1">Detail</a>
    								</div>

    								<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    									<div class="modal-dialog" role="document">
    										<div class="modal-content modal-info">
    											<div class="modal-header">
    												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
    											</div>
    											<div class="modal-body modal-spa">
    												<div class="col-md-5 span-2">
    													<div class="item">
    														<img src="<?php echo base_url() ?>public/image/product/<?php echo $row->photo ?>"  class="img-responsive" alt="">
    													</div>
    												</div>
    												<div class="col-md-7 span-1 ">
    													<h3><?php echo $row->name ?></h3>
    													<!-- <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p> -->
    													<div class="price_single">
    														<span class="reducedfrom ">Rp. <?php echo $row->froms ?> - Rp. <?php echo $row->untils ?></span>

    														<div class="clearfix"></div>
    													</div>
    													<h4 class="quick">Deskripsi:</h4>
    													<p class="quick_desc"><?php echo $row->description ?></p>
    													<div class="add-to">
    														<!-- <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Wheat" data-summary="summary 24" data-price="1.50" data-quantity="1" data-image="images/of24.png">Add to Cart</button> -->
    													</div>
    												</div>
    												<div class="clearfix"> </div>
    											</div>
    										</div>
    									</div>
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
    	<div class="footer">
    		<div class="container">
    			<div class="col-md-3 footer-grid">
    				<h3>About Us</h3>
    				<p>Nam libero tempore, cum soluta nobis est eligendi 
    					optio cumque nihil impedit quo minus id quod maxime 
    				placeat facere possimus.</p>
    			</div>
    			<div class="col-md-3 footer-grid ">
    				<h3>Menu</h3>
    				<ul>
    					<li><a href="index.html">Home</a></li>
    					<li><a href="kitchen.html">Kitchen</a></li>
    					<li><a href="care.html">Personal Care</a></li>
    					<li><a href="hold.html">Household</a></li>						 
    					<li><a href="codes.html">Short Codes</a></li> 
    					<li><a href="contact.html">Contact</a></li>
    				</ul>
    			</div>
    			<div class="col-md-3 footer-grid ">
    				<h3>Customer Services</h3>
    				<ul>
    					<li><a href="shipping.html">Shipping</a></li>
    					<li><a href="terms.html">Terms & Conditions</a></li>
    					<li><a href="faqs.html">Faqs</a></li>
    					<li><a href="contact.html">Contact</a></li>
    					<li><a href="offer.html">Online Shopping</a></li>						 

    				</ul>
    			</div>
    			<div class="col-md-3 footer-grid">
    				<h3>My Account</h3>
    				<ul>
    					<li><a href="login.html">Login</a></li>
    					<li><a href="register.html">Register</a></li>
    					<li><a href="wishlist.html">Wishlist</a></li>

    				</ul>
    			</div>
    			<div class="clearfix"></div>

    			<div class="copy-right">
    				<p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
    			</div>
    		</div>
    	</div>
    	<!-- //footer-->

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




	<!-- product -->
	
	<!-- product -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of25.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Peach Halves(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$10.00</del>$9.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="25" data-name="Peach Halves" data-summary="summary 25" data-price="9.00" data-quantity="1" data-image="images/of25.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of26.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Banana(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$3.00</del>$2.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="26" data-name="Banana" data-summary="summary 26" data-price="2.00" data-quantity="1" data-image="images/of26.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of27.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Rice(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="27" data-name="Rice" data-summary="summary 27" data-price="3.50" data-quantity="1" data-image="images/of27.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of28.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Oil(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="28" data-name="Oil(500 g)" data-summary="summary 28" data-price="0.70" data-quantity="1" data-image="images/of28.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of29.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Biscuits(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="29" data-name="Biscuits" data-summary="summary 29" data-price="0.70" data-quantity="1" data-image="images/of29.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of30.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Nuts(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="30" data-name="Nuts" data-summary="summary 30" data-price="1.00" data-quantity="1" data-image="images/of30.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of31.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Rice(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="31" data-name="Rice" data-summary="summary 31" data-price="3.50" data-quantity="1" data-image="images/of31.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of32.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Noodles(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="32" data-name="Noodles" data-summary="summary 32" data-price="1.50" data-quantity="1" data-image="images/of32.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of33.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Tea(250 g)</h3>

						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="33" data-name="Seafood" data-summary="summary 33" data-price="0.70" data-quantity="1" data-image="images/of33.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of34.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Seafood(1 kg)</h3>

						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="34" data-name="Oats Idli" data-summary="summary 34" data-price="1.00" data-quantity="1" data-image="images/of34.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="<?php echo base_url() ?>assets/industri/images/of35.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Oats Idli(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="35" data-name="product 35" data-summary="summary 35" data-price="3.50" data-quantity="1" data-image="images/of35.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>