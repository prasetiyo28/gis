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
				<h1 ><a >Bantuan<span>Bantuan bantuan penggunaan</span></a></h1>
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
   <!--  	<div id="myCarousel" class="carousel slide" data-ride="carousel">

    		<div class="carousel-inner" role="listbox">
    			<div class="item active">
    				<a href="kitchen.html"><img class="first-slide" src="<?php echo base_url() ?>assets/industri/images/ba.jpg" alt="First slide"></a>

    			</div>

    		</div>

    	</div>
    -->     
    <!-- /.carousel -->



    <!--content-->
    <div>
    	




    	<!--content-->
    	<div >
    		<div class="container">
    			
    			<div class=" con-w3l agileinf">
    				<ul class="list-group">
    					<?php foreach ($bantuan as $row) {?>

    						<li class="list-group-item"><b><?php echo $row->question; ?></b><br><?php echo $row->answer; ?></li>
    					<?php } ?>
    				</ul>
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