<?php

    require_once "koneksi.php";
     $z = new db();
    
	$con = mysqli_connect($z->server,$z->username,$z->password,$z->database);
	
    $tampungKode = $_GET["idp"];
    
	
	$sql = "select nama,harga,desSingkat,desPanjang,addInfo,g1,g2,rating,merk,tahun from furniture WHERE kode_barang='$tampungKode'";
	
	$result = mysqli_query($con,$sql);
	
	
	$xml = new SimpleXMLElement("<data_jerseyProduct/>");
	while ($row = mysqli_fetch_assoc($result))
	{
		$nama=$xml->addChild("nama",$row["nama"]);
		$nama->addAttribute("harga",$row["harga"]);
		$nama->addAttribute("desSingkat",$row["desSingkat"]);
		$nama->addAttribute("desPanjang",$row["desPanjang"]);
		$nama->addAttribute("addInfo",$row["addInfo"]);
		$nama->addAttribute("g1",$row["g1"]);
		$nama->addAttribute("g2",$row["g2"]);
		$nama->addAttribute("rating",$row["rating"]);	
		$nama->addAttribute("merk",$row["merk"]);
		$nama->addAttribute("tahun",$row["tahun"]);
	}
	
	echo $xml->asXml();
	mysqli_free_result($result);
	mysqli_close($con);
?>