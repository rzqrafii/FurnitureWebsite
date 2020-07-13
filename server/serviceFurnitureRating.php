<?php
    require_once "koneksi.php";
     $z = new db();
    
	$con = mysqli_connect($z->server,$z->username,$z->password,$z->database);
	
    $tampung= $_GET["tampungg"];
	
	$sql = "select * from furniture WHERE rating='$tampung'";
	
	$result = mysqli_query($con,$sql);
	
	$xml = new SimpleXMLElement("<data_jerseyRating/>");
	while ($row = mysqli_fetch_assoc($result))
	{
		$nama=$xml->addChild("nama",$row["nama"]);
		$nama->addAttribute("kode_barang",$row["kode_barang"]);	
		$nama->addAttribute("harga",$row["harga"]);
		$nama->addAttribute("g1",$row["g1"]);
		$nama->addAttribute("rating",$row["rating"]);	
	}
	
	echo $xml->asXml();
	mysqli_free_result($result);
	mysqli_close($con);
?>