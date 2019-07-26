<?php
include "config.php";
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
	
<body>
	<div class="agileits_header">
		<div class="n1_offers">
			<a href="products.html">Today's special Offers !</a>
		</div>
		<div class="n1_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="n1_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="n1s_code">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="logout.php">Logout</a></li> 
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="n1_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
	<div class="logo_products">
		<div class="container">
			<div class="n1s_logo_products_left">
<h1><a href="index.html"><span>DM Furniture</span> Store</a></h1>			</div>
			<div class="n1s_logo_products_left1">
				<ul class="special_items">
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
				</ul>
			</div>
			<div class="n1s_logo_products_left1">
				<ul class="phone_email">
					
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0920) 77 77 77</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:Dmfurnituree@Gmail.com">Dmfurnituree@Gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="products-furn">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Office Furniture</li>
			</ul>
		</div>
	</div>
	<div class="banner">
		<div class="n1_banner_nav_left">
			<nav class="navbar nav_bottom">
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			 	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="Dining.html">Dining Room</a></li>
						
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bed Room<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu n1s_code_menu">
								<div class="n1s_code">
									<ul>	
										<li><a href="Beds.html">Beds</a></li>
										<li><a href="bedroom.html">BedRoom Furnitures</a></li>
							
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="kitchen.html">Kitchen</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Office Furnitures<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu n1s_code_menu">
								<div class="n1s_code">
									<ul>
										<li><a href="officet.html">Office Tables</a></li>
										<li><a href="officech.html">Office Chairs</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
							<li><a href="Bar.html">Bar Furnitures</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">School Furnitures<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu n1s_code_menu">
								<div class="n1s_code">
									<ul>
										<li><a href="schoolt.html">Tables</a></li>
										<li><a href="schoolc.html">Chairs</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="hair.html">Hair Salon</a></li>
					</ul>
				 </div>
			</nav>
		</div>
		<div class="n1_banner_nav_right">
			<div class="n1_banner_nav_right_banner7">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			<div class="n1s_n1_banner_nav_right_grid n1s_n1_banner_nav_right_grid_sub">
				<h3>Office chairs</h3>
				<div class="n1s_n1_banner_nav_right_grid1">
					<div class="col-md-3 n1s_n1_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid n1_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/oc1.jpg" alt=" " class="img-responsive" /></a>
											<p>Blue offfice chair</p>
											<h4>$150.00 <span>$250.00</span></h4>
									</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Blue office chair" />
													<input type="hidden" name="amount" value="150.00" />
													<input type="hidden" name="discount_amount" value="15.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 n1s_n1_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid n1_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/oc2.jpg" alt=" " class="img-responsive" /></a>
											<p>Black leather chair</p>
											<h4>$150.00 <span>$250.00</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Black leather chair" />
													<input type="hidden" name="amount" value="150.00" />
													<input type="hidden" name="discount_amount" value="25.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 n1s_n1_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid n1_agile_top_brand_left_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/oc3.jpg" alt=" " class="img-responsive" /></a>
										<p>Blue&Black offfice chair</p>
											<h4>$250.00 <span>$350.00</span></h4>
									</div>
										<div class="snipcart-details">


											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Blue&Black office chair" />
													<input type="hidden" name="amount" value="250.00" />
													<input type="hidden" name="discount_amount" value="50.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 n1s_n1_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid n1_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/oc4.jpg" alt=" " class="img-responsive" /></a>
												<p>Black offfice chair</p>
											<h4>$150.00 <span>$250.00</span></h4>
									
										</div>
										<div class="snipcart-details">
											<?php
$sql=mysqli_query($conn,"insert into contact values('$name','$subject','$email','$message')");
?>

											<form action="officech.php" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Black offfice chair" />
													<input type="hidden" name="amount" value="150.00" />
													<input type="hidden" name="discount_amount" value="25.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
		<div class="clearfix"></div>
	</div>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 0) {
				alert('The minimum order quantity is 1. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>