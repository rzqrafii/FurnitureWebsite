<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/31944804_119859008880931_7680956372128628736_n.jpg?_nc_cat=0&oh=0a6a6a255aeae4fc881a1d9aff57420e&oe=5B98BF94" />
<title>f&r Store | Furniture</title>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


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
<style>
    .box {
      color: black;
    }
    
    .box:hover {
      background-color: rgb(224, 224, 210);
      cursor: pointer;
      -webkit-transition: background-color 0.75s ease-out;
      -moz-transition: background-color 0.75s ease-out;
      -o-transition: background-color 0.75s ease-out;
      transition: background-color 0.75s ease-out;
    }
    
    
</style>
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

    $zzz="furniture.php";
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
						<li><a href="index.php" class="hyper "><span>Home</span></a></li>	
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
<div class="sub-banner my-banner4">
</div>
<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
		    <div align="center" style="font-size:20px;"> Filter by </div><br>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Rating</h3>
					<div class="w3ls_dresses_grid_left_grid_sub">
						<div class="ecommerce_color">
							<ul>
								<li class="box"><a href="furniture.php?tampung=1"><i></i>1 Bintang</a></li>
								<li class="box"><a href="furniture.php?tampung=2"><i></i>2 Bintang</a></li>
								<li class="box"><a href="furniture.php?tampung=3"><i></i>3 Bintang</a></li>
								<li class="box"><a href="furniture.php?tampung=4"><i></i>4 Bintang</a></li>
								<li class="box"><a href="furniture.php?tampung=5"><i></i>5 Bintang</a></li>
							</ul>
						</div>
					</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Merk</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color">
						<ul>
							<li class="box"><a href="furniture.php?tampungg=Ondan"><i></i>Ondan</a></li>
							<li class="box"><a href="furniture.php?tampungg=Anaika"><i></i>Anaika</a></li>
							<li class="box"><a href="furniture.php?tampungg=Mutoyo"><i></i>Mutoyo</a></li>
							<li class="box"><a href="furniture.php?tampungg=Triangle"><i></i>Triangle</a></li>
							<li class="box"><a href="furniture.php?tampungg=Monstera"><i></i>Monstera</a></li>
							<li class="box"><a href="furniture.php?tampungg=Zigzag+White+Blue"><i></i>Zigzag White Blue</a></li>
							<li class="box"><a href="furniture.php?tampungg=Bunny+LED"><i></i>Bunny LED</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Harga</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color ecommerce_size">
						<ul>
							<li class="box"><a href="furniture.php?tampung1=100000&tampung2=2999999"><i></i>100 ribu s/d 3 juta</a></li>
							<li class="box"><a href="furniture.php?tampung1=3000000&tampung2=5999999"><i></i>3 juta s/d 6 juta</a></li>
							<li class="box"><a href="furniture.php?tampung1=6000000&tampung2=10000000"><i></i>6 juta s/d 10 juta</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Clear Filter</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color ecommerce_size">
						<ul>
							<li class="box"><a href="furniture.php"><i></i>Clear Filter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-8 women-dresses">
			
			    <?php
			    
			    error_reporting(E_ERROR | E_PARSE);
			    
			        $tam=$_GET["tampung"];
			        $tamm=$_GET["tampungg"];
			        $tam1=$_GET["tampung1"];
			        $tam2=$_GET["tampung2"];
			        
			        // pemanggilan service all furniture
			        $tampungURL="http://rafiirizqullah23.000webhostapp.com/server/serviceAllFurniture.php";
			        
			        if ($tam >= 1 && $tam <=5)
			        {
			            $tampungURL="http://rafiirizqullah23.000webhostapp.com/server/serviceFurnitureRating.php?tampungg=$tam";
			        }
			        
			        if ($tamm == "Ondan" || $tamm == "Anaika" || $tamm == "Mutoyo" || $tamm == "Triangle" || $tamm == "Monstera" || $tamm == "Zigzag White Blue" || $tamm == "Bunny LED" )
			        {
			            $tamm= preg_replace('/ /', '+', $tamm);
			            $tampungURL="http://rafiirizqullah23.000webhostapp.com/server/serviceFurnitureMerk.php?tampungg=$tamm";
			        }
			        
			        if ($tam1 >= 100000 && $tam2 <= 10000000)
			        {
			            $tampungURL="http://rafiirizqullah23.000webhostapp.com/server/serviceFurnitureHarga.php?tampungg1=$tam1&tampungg2=$tam2";
			        }
			        
			        $url_gambar="http://rafiirizqullah23.000webhostapp.com/server/furniture/";
			        $curl = curl_init();
                    curl_setopt($curl , CURLOPT_URL, $tampungURL);
            		curl_setopt($curl , CURLOPT_HEADER,0);
            		curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
            		$xml = new SimpleXMLElement(curl_exec($curl));
            		curl_close($curl);
            		
            		$cnt=0;
            		
            		
            		foreach($xml->nama as $nama):
                    	    
                    	     
	                $cnt++;
	                
            	    $nm=$nama;
            	    $tampungHarga=$nama["harga"];
            	    $g1=$url_gambar.$nama["g1"];
            	    $yellowStar=$nama["rating"];
            	    $id=$nama["kode_barang"];
            		
				    
				    
            		
            		echo "
            		<br>
            		<div class='col-md-4 women-grids wp1 animated wow slideInUp' data-wow-delay='.5s'>
    				 <a href='product.php?idd=$id&tmp=furniture'><div class='product-img'>
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
					</div></a>
					<br>
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
					if ($cnt%3==0)
				    {
            		    echo "
            		    <div class='clearfix'></div>
            		    <br>
            		    ";
				    }
	               
            	endforeach;
			    
			    ?>
				
				
			
			</div>
		</div>
	</div>
</div>
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
				<form method="post" id="myForm" action="furniture.php" onSubmit="alert('Terima kasih atas subscribenya :) .');" >
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
		<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="js/main.js"></script> 
</body>
   <script>
    $(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
    </script>
</html>
