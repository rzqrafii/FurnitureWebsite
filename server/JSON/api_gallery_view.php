<?php    
	include "../config/koneksi.php";
	$k = new db();		
	$con = mysqli_connect($k->server, $k->username, $k->password, $k->database);
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM furniture where id='$id' order by id DESC";
	$result = mysqli_query($con, $sql);
	$nr = mysqli_num_rows($result);
	$no=0;
	$json = '{"data": {';
	$json .= '"object":[ ';
	while($r=mysqli_fetch_array($result)) {					
		$json .= '{';
			$json .= 
			   '"id":"'.$r['id'].'",
			    "nama":"'.$r['nama'].'",
				"gambar":"'.$r['g1'].'",
				"kode":"'.$r['kode_barang'].'",
				"ket":"'.$r['desPanjang'].'"
			}';					
		$no++;
		if($no < $nr) {
			$json .= ',';
		}		
	}
	$json .= ']';
	$json .= '}}';
	echo $json;
?>	