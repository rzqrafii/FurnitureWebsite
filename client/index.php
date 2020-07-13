
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="shortcut icon" type="image/x-icon" href="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/31944804_119859008880931_7680956372128628736_n.jpg?_nc_cat=0&oh=0a6a6a255aeae4fc881a1d9aff57420e&oe=5B98BF94" />

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<title>f&r Store | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>



</head>

<body class="animsition">
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/logo2.png" alt=" " /><h1>f&r Store</h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+62 812 9688 6565</li>
				<br>
		            <?php
		               error_reporting(E_ERROR | E_PARSE);
                		
                		session_start();
                		
                    		if ($_SESSION["namaq"]=="")
                    		{
                    		    echo " <li><a href='login.php'>Login </a>/</li>
                        			   <li><a href='register.php'>Register</a></li>
                        			   <br>";
                    		}
                    		else
                    		{
                    		    echo "<li>Selamat datang, <a href='profiles.php'><font color='green'> ".$_SESSION["namaq"]."</font></a></li>
                    		    <br>
                    		    <li><a href='logout.php' name='logout'><font color='red'>Log out</font></a></li><br>";
                    		    
                    		}

                    ?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php

    $zzz="index.php";
    include "checkVV.php";
?>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
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
						<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Shop <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jersey.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Jersey</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="merchandise.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Merchandise</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="furniture.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Furniture</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						
						<li><a href="about.php" class="hyper"><span>About</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
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
		<div class="col-md-4 search-agileinfo">
			<form action="search.php" method="get">
				<input type="search" name="search" placeholder="Mencari Nama Produk..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
<?php
    
    $email=$_SESSION["emailq"];
                    	
	$curl = curl_init();
    curl_setopt($curl , CURLOPT_URL, "http://farrasmuttaqin1.000webhostapp.com/server/serviceCart.php?emaill=$email");
	curl_setopt($curl , CURLOPT_HEADER,0);
	curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
	$xml = new SimpleXMLElement(curl_exec($curl));
	curl_close($curl);
	
	$cnt=0;
	
	foreach($xml->id_cart as $id_cart):
	    $cnt++;
	endforeach;
	
	echo "
	
	<div class='col-md-1 cart-wthree'>
		    <form>
		        	<button class='w3view-cart' type='submit' name='submit' value=''>
					</button>
    			<div class='icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart' data-notify='$cnt'>
        			<i class='zmdi zmdi-shopping-cart'></i>
        		</div>
    		</form>
		</div>
	
	";

?>
				
		<div class="clearfix"></div>
	</div>
</div>
<?php
    
    $email=$_SESSION["emailq"];
    
    if ($email=="")
    {
        echo "";
    }
    else
    {
                    	
    	$curl = curl_init();
        curl_setopt($curl , CURLOPT_URL, "http://farrasmuttaqin1.000webhostapp.com/server/serviceCart.php?emaill=$email");
    	curl_setopt($curl , CURLOPT_HEADER,0);
    	curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
    	$xml = new SimpleXMLElement(curl_exec($curl));
    	curl_close($curl);
    	
    	echo "
    	
    	<div class='wrap-header-cart js-panel-cart'>
    		<div class='s-full js-hide-cart'></div>
    
    		<div class='header-cart flex-col-l p-l-65 p-r-25'>
    			<div class='header-cart-title flex-w flex-sb-m p-b-8'>
    				<span class='mtext-103 cl2'>
    					Your Cart
    				</span>
    
    				<div class='fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart'>
    					<i class='zmdi zmdi-close'></i>
    				</div>
    			</div>
    			
    			<div class='header-cart-content flex-w js-pscroll'>
    				<ul class='header-cart-wrapitem w-full'>
    	
    	";
    	$total=0;
    	foreach($xml->id_cart as $id_cart):
    	    $nama_product=$id_cart["nama_product"];
    	    $harga_product=$id_cart["harga_product"];
    	    $jenis_product=$id_cart["jenis_product"];
    	    $kode_product=$id_cart["kode_product"];
    	    $quantity=$id_cart["quantity"];
            
            if ($jenis_product=="jersey")
            {
                $urlGambar = "http://renjershop.000webhostapp.com/server/jersey/";
            }
            if ($jenis_product=="merchandise")
            {
                $urlGambar = "http://ahmadfaiz309.000webhostapp.com/server/merchandise/";
            }
            if ($jenis_product=="furniture")
            {
                $urlGambar = "http://rafiirizqullah23.000webhostapp.com/server/furniture/";
            }
            
    	    $gambar_product=$urlGambar.$id_cart["gambar_product"];
            
            
    	    echo "
    	    
    	    <li class='header-cart-item flex-w flex-t m-b-12'>
    			<div class='header-cart-item-img'>
    				<img src='$gambar_product'>
    			</div>
    
    			<div class='header-cart-item-txt p-t-0'>
    				<a href='product.php?idd=$kode_product&tmp=$jenis_product' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>
    					$nama_product
    				</a>
    
    				<span class='header-cart-item-info'>
    					$quantity x Rp ".strrev(implode('.',str_split(strrev(strval($harga_product)),3))).",-
    				</span>
    			</div>
    		</li>
    		<li><br></li>";
    		
        $total=($quantity*$harga_product)+$total;
    	endforeach;
        
        echo "
                    </ul>
    				<div class='w-full'>
    					<div class='header-cart-total w-full p-tb-40'>
    						Total: Rp ".strrev(implode('.',str_split(strrev(strval($total)),3))).",-
    					</div>
    
    					<div class='header-cart-buttons flex-w w-full'>";
    					
    					if ($total>0)
    						{
    						echo "
        						<a href='carts.php' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'>
        							View Cart
        						</a>
        						<a href='checkcheck.php' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10'>
        							Check Out
        						</a>";
    						}
    						echo "
        						
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
        ";
    }
?>


<div class="banner-agile" style="background-attachment:fixed;">
	<div class="container">
		<h2>Selamat Datang di</h2>
		<h3>f&r Store</h3>
		<p style="color:white;font-size:16px;">Kami Melayani Pembelian Berupa Jersey, Merchandise dan Furniture (peralatan rumah tangga).</p>
		<a href="about.php">Read More</a>
	</div>
</div>
<div class="top-products">
	<div class="container">
		<h3>Top Products</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs" style="text-align:center;">
					<li class="resp-tab-item"><span>Jersey</span></li>
					<li class="resp-tab-item"><span>Merchandise</span></li>
					<li class="resp-tab-item"><span>Furniture</span></li>
				</ul>	
				<br>
				<br>
			
			<div class="resp-tabs-container">
			    <div class="tab-1 resp-tab-content">
				    <?php
				    
                    	$url_gambar="http://renjershop.000webhostapp.com/server/jersey/";
                    	
                    	$curl = curl_init();
                        curl_setopt($curl , CURLOPT_URL, "http://renjershop.000webhostapp.com/server/serviceJerseyTopProduct.php");
                		curl_setopt($curl , CURLOPT_HEADER,0);
                		curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
                		$xml = new SimpleXMLElement(curl_exec($curl));
                		curl_close($curl);
                    	
                    	$cnt=0;
                    	
                    	foreach($xml->nama as $nama):
                    	    
                    	    $nm=$nama;
                    	    $tampungHarga=$nama["harga"];
                    	    $g1=$url_gambar.$nama["g1"];
                    	    $yellowStar=$nama["rating"];
                    		$id=$nama["kode_barang"];

                    		echo "
                    		<div class='col-md-3 top-product-grids tp1'>
    							<div class='product-img'>
    								<img src='$g1' />
    								<div class='p-mask'>
    								<form action='product.php?idd=$id&tmp=jersey' method='post'>
    									<input type='hidden' name='cmd' value='_cart' />
    									<input type='hidden' name='add' value='1' /> 
    									<input type='hidden' name='w3ls1_item' value='$nm' /> 
    									<input type='hidden' name='amount' value='$tampungHarga' /> 
    									<button type='submit' class='w3ls-cart pw3ls-cart'><i class='fa fa-cart-plus' aria-hidden='true'></i> Beli Barang</button>
    								</form>
    								</div>
    							</div>
    							";
    							
    							for ($x = 0; $x < $yellowStar; $x++) {
                                    echo "<i class='fa fa-star yellow-star' aria-hidden='true'></i>";
                                } 
    							
    							$grayStar = 5-$yellowStar;
    							
    							for ($x = 0; $x < $grayStar; $x++) {
                                    echo "<i class='fa fa-star gray-star' aria-hidden='true'></i>";
                                } 
    							
							    echo "
    							<h4>$nm</h4>
    							<h5> Rp ".strrev(implode('.',str_split(strrev(strval($tampungHarga)),3))).",-</h5>
    						</div>
    						";
    						
    						$cnt++;
    						 
    						 if ($cnt%4==0)
    						 {
    						     echo "
    						     <div class='clearfix'></div>
    						     <br>";
    						 }
                    	endforeach;
                    ?>
				   </div>
				   <div>
					<?php
				    
                    	$url_gambar="http://ahmadfaiz309.000webhostapp.com/server/merchandise/";
                    	
                    	$curl = curl_init();
                        curl_setopt($curl , CURLOPT_URL, "ahmadfaiz309.000webhostapp.com/server/serviceMerchandiseTopProduct.php");
                		curl_setopt($curl , CURLOPT_HEADER,0);
                		curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
                		$xml = new SimpleXMLElement(curl_exec($curl));
                		curl_close($curl);
                    	
                    	$cnt=0;
                    	
                    	foreach($xml->nama as $nama):
                    	    
                    	    $nm=$nama;
                    	    $tampungHarga=$nama["harga"];
                    	    $g1=$url_gambar.$nama["g1"];
                    	    $yellowStar=$nama["rating"];
                    		$id=$nama["kode_barang"];

                    		echo "
                    		<div class='col-md-3 top-product-grids tp1'>
    							<div class='product-img'>
    								<img src='$g1' />
    								<div class='p-mask'>
    								<form action='product.php?idd=$id&tmp=merchandise' method='post'>
    									<input type='hidden' name='cmd' value='_cart' />
    									<input type='hidden' name='add' value='1' /> 
    									<input type='hidden' name='w3ls1_item' value='$nm' /> 
    									<input type='hidden' name='amount' value='$tampungHarga' /> 
    									<button type='submit' class='w3ls-cart pw3ls-cart'><i class='fa fa-cart-plus' aria-hidden='true'></i> Beli Barang</button>
    								</form>
    								</div>
    							</div>
    							";
    							
    							for ($x = 0; $x < $yellowStar; $x++) {
                                    echo "<i class='fa fa-star yellow-star' aria-hidden='true'></i>";
                                } 
    							
    							$grayStar = 5-$yellowStar;
    							
    							for ($x = 0; $x < $grayStar; $x++) {
                                    echo "<i class='fa fa-star gray-star' aria-hidden='true'></i>";
                                } 
    							
							    echo "
    							<h4>$nm</h4>
    							<h5> Rp ".strrev(implode('.',str_split(strrev(strval($tampungHarga)),3))).",-</h5>
    						</div>
    						";
    						
    						$cnt++;
    						 
    						 if ($cnt%4==0)
    						 {
    						     echo "
    						     <div class='clearfix'></div>
    						     <br>";
    						 }
                    	endforeach;
                    ?>
				   </div>
					
				    <!-- pemanggilan service top product pada client -->
					<div class="tab-1 resp-tab-content">
					<?php
                    	$url_gambar="http://rafiirizqullah23.000webhostapp.com/server/furniture/";
                    	$curl = curl_init();
                        curl_setopt($curl , CURLOPT_URL, "http://rafiirizqullah23.000webhostapp.com/server/serviceFurnitureTopProduct.php");
                		curl_setopt($curl , CURLOPT_HEADER,0);
                		curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
                		$xml = new SimpleXMLElement(curl_exec($curl));
                		curl_close($curl);
                    	
                    	$cnt=0;
                    	
                    	foreach($xml->nama as $nama):
                    	    
                    	    $nm=$nama;
                    	    $tampungHarga=$nama["harga"];
                    	    $g1=$url_gambar.$nama["g1"];
                    	    $yellowStar=$nama["rating"];
                    		$id=$nama["kode_barang"];

                    		echo "
                    		<div class='col-md-3 top-product-grids tp1'>
    							<div class='product-img'>
    								<img src='$g1' />
    								<div class='p-mask'>
    								<form action='product.php?idd=$id&tmp=furniture' method='post'>
    									<input type='hidden' name='cmd' value='_cart' />
    									<input type='hidden' name='add' value='1' /> 
    									<input type='hidden' name='w3ls1_item' value='$nm' /> 
    									<input type='hidden' name='amount' value='$tampungHarga' /> 
    									<button type='submit' class='w3ls-cart pw3ls-cart'><i class='fa fa-cart-plus' aria-hidden='true'></i> Beli Barang</button>
    								</form>
    								</div>
    							</div>
    							";
    							
    							for ($x = 0; $x < $yellowStar; $x++) {
                                    echo "<i class='fa fa-star yellow-star' aria-hidden='true'></i>";
                                } 
    							
    							$grayStar = 5-$yellowStar;
    							
    							for ($x = 0; $x < $grayStar; $x++) {
                                    echo "<i class='fa fa-star gray-star' aria-hidden='true'></i>";
                                } 
    							
							    echo "
    							<h4>$nm</h4>
    							<h5> Rp ".strrev(implode('.',str_split(strrev(strval($tampungHarga)),3))).",-</h5>
    						</div>
    						";
    						    
    						 $cnt++;
    						 
    						 if ($cnt%4==0)
    						 {
    						     echo "
    						     <div class='clearfix'></div>
    						     <br>";
    						 }
    						
                    	endforeach;
                    ?>
						
					
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Kami Melayani</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24 Jam</h4>
					<p>Kami selalu online, untuk melayani pembelian anda setiap saat</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Pengiriman Kemanapun, Harganya Sama</h4>
					<p>Dimanapun lokasi anda, harga pengirimannya selalu sama</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% Uang Kembali</h4>
					<p>f&r Store menjamin 100% pembelian anda, Jika terjadi sesuau yang tidak diinginkan, maka kami akan mengembalikan 100% uang anda</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c1.jpg" alt=" " class="img-responsive" />
								<p> It was so awesome to work with you, he's just a great guy all around, and we can't wait to work with you again.</p>
								<h4># Rafii</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c2.png" alt=" " class="img-responsive" />
								<p>Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.</p>
								<h4># Reno</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="images/c3.png" alt=" " class="img-responsive" />
								<p>Fusce non cursus quam, in hendrerit sem. Nam nunc dui, venenatis vitae porta sed, sagittis id nisl. Pellentesque celerisque  eget ullamcorper vehicula. </p>
								<h4># Faiz</h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.wmuSlider.js"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/4.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/5.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/6.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/7.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/46.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //top-brands -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<br>
				<p>Subscribe website kami untuk mendapatkan berita terbaru!!</p>
			</div>
			<?php
			error_reporting(E_ERROR | E_PARSE);
			    $email = $_POST["Email"];
			    
			    if ($email=="")
			    {
			        echo "";
			    }
			    else
			    {
			        $conn = mysqli_connect("localhost","id4159098_fashionlc","farras9988","id4159098_fashion");
			        $sql = "INSERT INTO news (email_news) VALUES ('$email')";
			        
			        if ($conn->query($sql) === TRUE) {
                        echo "";
                    } else {
                        echo "";
                    }
                    
                    $conn->close();
			    }
			?>
			<div class="col-md-6 w3agile_newsletter_right">
				<form method="post" id="myForm" action="index.php" onSubmit="alert('Terima kasih atas subscribenya :) .');" >
					<input type="email" name="Email" placeholder="Masukkan Email.." required>
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.php"><img src="images/logo2.png" alt=" " /><h3>f&r Store</h3></a>
		<ul>
			<li>No 02, RT 001/012,</li>
			<li>Kabupaten Bekasi, Indonesia.</li>
			<li><a href="mailto:frstoreee@gmail.com">frstoreee@gmail.com</a></li>
			<a href="https://twitter.com/motivasinesia"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com/faraf.styles.5?ref=bookmarks"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/in/farras-muttaqin-59259412a/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href="jersey.php">Jersey</a></li>
				<li><a href="merchandise.php">Merchandise</a></li>
				<li><a href="furniture.php">Furniture</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
			    <?php
                		error_reporting(E_ERROR | E_PARSE);
                		session_start();
                		
                    		if ($_SESSION["namaq"]=="")
                    		{
                    		    echo " <li><a href='login.php'>Login </a></li>
                        			   <li><a href='register.php'>Register</a></li>
                        			   ";
                    		}
                    		else
                    		{
                    		    echo "  <li><a href='profiles.php'>Profile</a></li>
				                        <li><a href='payment.php'>Cara bayar / How to pay</a></li>";
                    		}

                    ?>
				
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2018 f&r Store, All rights reserved.</p>
	</div>
</div>
	<!-- cart-js -->
	<!-- //cart-js -->   
	
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="js/main.js"></script>

	
</body>
    <script>
    $(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
    </script>
    
    
    
    
</html>