<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>MIBODA CR</title>
<link rel="shortcut icon" href="http://latinohitsradio.com/wp-content/uploads/2017/01/miBodaCR.png" />

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers" >
			<a href="index.php">Ofertas especiales!</a>
		</div>
		
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Buscar producto..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar producto';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<fieldset>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
						">
						<!--<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">-->
						<input type="submit" name="submit" value="Ver carrito      " class="button" />
						<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
						</fieldset>
					</form>
		 </div>
			<!--<div class="w3l_offers" id="usernameClass">				
				<h2><?php if(isset($_SESSION["usuario"])){echo $_SESSION["usuario"]["username"];}?></h2>
			</div> -->
		<div class="w3l_header_right">
			<ul>
				<div class="usernameClass">				
				<a><?php if(isset($_SESSION["usuario"])){echo $_SESSION["usuario"]["username"];}?></a>
			</div>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Entrar</a></li> 
								<li><a href="login.php">Regístrate</a></li>
								<li><a href="ingresar_pro_ser.php">Ingresar Producto/Servicio</a></li>
								<li><a href="login.php">Salir</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.php">Contáctenos</a></h2>
		</div>
		
	</div>
<!-- script-for sticky-nav -->
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
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span></span> <img src="images/miBodaCR.png" alt=" " class="img-responsive" width="60%" height="30%"/></a></h1>
			</div>
			<div><br><br></div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>2234 6567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">mibodacr@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Vestuario<span class="caret"></span></a><!--Veggies & Fruits-->			
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vestuarioParaNovia.php">Vestuario para la novia</a></li>
										<li><a href="vestuarioParaNovio.php">Vestuario para el novio</a></li>
										<li><a href="vestuarioParaDamasPajes.php">Vestuario para las damas y pajes</a></li>
									</ul>
								</div>                  
							</div>				
						</li><!--Branded Foods-->
						<li><a href="accesoriosDeVestuario.php">Accesorios del vestuario</a></li><!-- Households-->
						<li><a href="zapateria.php">Zapatería</a></li>
						<li><a href="joyeria.php">Joyeria</a></li>
						<li><a href="floristeria.php">Floristería</a></li>
						<li><a href="pastileria.php">Pastelería</a></li>
						<li><a href="licoresVinos.php">Licores y vinos</a></li>

						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<span class="caret"></span></a><!--Veggies & Fruits-->			
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vestuarioParaNovia.php">Vestuario para la novia</a></li>
										<li><a href="vestuarioParaNovio.php">Vestuario para el novio</a></li>
										<li><a href="vestuarioParaDamasPajes.php">Vestuario para las damas y pajes</a></li>
									</ul>
								</div>                  
							</div>				
						</li><!--Branded Foods-->
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<div class="more">
								
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<!--<h3>Make your <span>food</span> with Spicy.</h3>-->
								<div class="more">
									
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<div class="more">
									
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- banner -->
	<div class="banner_bottom">
			<div class="wthree_banner_bottom_left_grid_sub">
			</div>
			<div class="wthree_banner_bottom_left_grid_sub1">
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<a href="https://www.booking.com/hotel/cr/volcano-lodge.html" target="_blank"><img src="images/hotel1.jpg" alt=" " class="img-responsive" /></a>
						<div class="wthree_banner_bottom_left_grid_pos">
							<h4 style="color:#fff">Volcano Lodge & Springs <span>25%</span></h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<a href="https://www.booking.com/hotel/cr/bella-vista-mar.pl.html" target="_blank"><img src="images/hotel2.jpg" alt=" " class="img-responsive" /></a>
						<div class="wthree_banner_bottom_left_grid_pos">
							<h4 style="color:#fff">Volcano Lodge & Springs <span>25%</span></h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 wthree_banner_bottom_left">
					<div class="wthree_banner_bottom_left_grid">
						<a href="https://www.booking.com/hotel/cr/best-western-jaco-beach" target="_blank"><img src="images/hotel3.jpg" alt=" " class="img-responsive" /></a>
						<div class="wthree_banner_bottom_left_grid_pos">
							<h4 style="color:#fff">Best Western Jaco Beach <span>25%</span></h4>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- top-brands -->
	
<!-- //top-brands -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 w3_footer_grid">
				<h3>Información</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="about.php">Sobre nosotros</a></li>
				</ul>
			</div>
			<div class="col-md-6 w3_footer_grid">
				<h3>Politicas del sitio</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="privacy.php">Politicas de privacidad</a></li>
					<li><a href="about.php">Equipo de trabajo</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-6 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% seguridad en pagos</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-6 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>Conectate a nuestra redes sociales</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 MiBodaCR Todos los derechos reservados</p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
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
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 1) {
				alert('La cantidad minima para realizar la compra es de 1 productos. Por favor ingresa mas productos al carrito para poder realizar su pedido');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
