<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 

						require "koneksi.php";
						$k= new db();
						$con = mysqli_connect($k->server,$k->username,$k->password, $k->database);
						
						if (isset($_POST['login']))
						{
							$nama=$_POST['nama'];
							$pass=md5($_POST['password']);
							
							$sql = "SELECT * FROM tb_cust WHERE nama = '$nama' AND password = '$pass'";
							
							$login = mysqli_query($con, $sql);
							$result   = mysqli_num_rows($login);
							
							if($result > 0)
							{
							    $hasil = mysqli_fetch_array($login);
							    $nm=$hasil['nama'];
							    
							    session_start();
							    // session name;
							    $_SESSION['name'] = $nm;
							   	header("location:index.php");
							    $_SESSION['message']= 'loginberhasil';

							    
							}
							else{
							   header("location:login.php");
							   $_SESSION['message']= 'login gagal';
							}
						}
?>
<!DOCTYPE html>
<html>
<head>
    
<link rel="icon" href="images/favlogo.ico">

<title>Toko Furniture Online-dekoryuk!</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.php">
					<!-- margin top : 5.5%, float left, width 20% -->
					<img src="images/logodekor-01.png" alt="" style="float: left; width: 20%; margin-top: 3%;">
				</a>
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-9 col-md-offset-2  header-login">
					<ul >
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Register</a></li>
					</ul>
		</div>
				
			<!-- <div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div> -->
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
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
        <!-- NAVBAR 1 -->


            <!-- <li><a class="color" href="index.html">Home</a></li> -->
            <!-- NAVBAR 2 -->
            
    		<li class="dropdown mega-dropdown active">
    			
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Ruang Tamu<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4><a href="product.php" style="text-align: left; padding: 0%;">Sofa</a></h4>
									<ul>
										<li><a href="product.php">Kursi Armchair</a></li>
										<li><a href="product.php">Sofa 2 Seater</a></li>
										<li><a href="product.php">Sofa 3 Seater</a></li>
										<li><a href="product.php">Sofa L</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tempat Duduk</h4>
								<ul>
										<li><a href="product.php">Recliners</a></li>
										<li><a href="product.php">Bangku</a></li>
										<li><a href="product.php">Kursi Santai</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tempat Penyimpanan</h4>
									<ul>
										<li><a href="product.php">Meja Tamu</a></li>
										<li><a href="product.php">Meja Samping</a></li>
										<li><a href="product.php">Meja TV</a></li>
										<li><a href="product.php">Rak</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Dekorasi Rumah</h4>
								<ul>
									<li><a href="product.php">Bantal</a></li>
									<li><a href="product.php">Karpet</a></li>
									<li><a href="product.php">Lampu</a></li>
									<li><a href="product.php">Bantal Duduk</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/ruangtamu_nav-02-02.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<!-- NAVBAR 3 -->
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Ruang Makan<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Kursi</h4>
									<ul>
										<li><a href="product.php">Kursi Makan </a></li>
										<li><a href="product.php">Bangku</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Meja Makan</h4>
								<ul>
										<li><a href="product.php">4 Seater Meja Makan</a></li>
										<li><a href="product.php">6 Seater Meja Makan</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Dekorasi Rumah</h4>
								
									<ul>
										<li><a href="product.php">Alat Makan</a></li>
										<li><a href="product.php">Hiasan Meja</a></li>
										<li><a href="product.php">Tanaman</a></li>
									</ul>	
								
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/nav_kitchen-02.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>

			<!-- NAVBAR 4 -->
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Dekorasi Rumah<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Lampu</h4>
									<ul>
										<li><a href="product.php">Lampu Dinding</a></li>
										<li><a href="product.php">Lampu Gantung</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Karpet</h4>
								<ul>
										<li><a href="product.php">Karpet</a></li>
										<li><a href="product.php">Karpet Kecil</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Linen Rumah</h4>
								
									<ul>
										<li><a href="product.php">Bantal</a></li>
										<li><a href="product.php">Gorden</a></li>
										<li><a href="product.php">Selimut</a></li>
									</ul>	
								
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/dekor_nav-02.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
            <li><a class="color3" href="product.php">Product</a></li>
			<!-- <li><a class="color4" href="404.html">About</a></li> -->
			<!-- <li><a class="color5" href="typo.html">Short Codes</a></li> -->
            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<!--<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>-->
				</a></li>
				<li>
				    <!--<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a>-->
				    </li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<!--<span class="simpleCart_total"></span></div>-->
							<!--<img src="images/cart.png" alt=""/></h3>-->
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Account</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div id="banner-top">
	<a href="product.php"><img src="images/backbanner2-01.jpg" style="width: 100%;"></a>

	<div class="container">
		
		<!-- <h2><a href="index.html">Home</a><label>/</label>Login</h2> -->
	</div>
</div>
<!--login-->
<div class="container">
<h1 style="color: black; margin-top: 5%; margin-left: 2%;"><b>Login</b></h1>
		<div class="login">
			
			<form action="" method="POST">
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" placeholder="Username" required="" name="nama">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="" name="password">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
				<label class="hvr-skew-backward">

					<input type="submit" value="login" name="login">
				</label>
			</div>
			<div class="col-md-6 login-right">
				 <h3>Completely Free Account</h3>
				 
				 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
				 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
				<a href="register.php" class=" hvr-skew-backward">Register</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

<!--//login-->

			<!--brand-->
		<div class="container">
			<div class="brand" style="margin-top: 15%;">
				<div class="col-md-3 brand-grid">
					<img src="images/brand1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/brand2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/brand3.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/brand4.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
		
	<!--//content-->
		<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="images/logoputih-01.png" alt="" style="width: 85%;"></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<!-- <li><a href="404.html">About</a></li> -->
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Furniture</a></li>
							<li><a href="#">RuangMakan</a></li>
							<li><a href="#">RuangTamu</a></li>
							<li><a href="#">DekorasiRumah</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom" style="background-color: #f27677 ;">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2016 dekoryuk! All Rights Reserved | Design by rzqdsgn</p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>