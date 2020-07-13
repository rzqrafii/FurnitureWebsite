<?php    
	include "../config/koneksi.php";
	$k = new db();		
	$con = mysqli_connect($k->server, $k->username, $k->password, $k->database);			
	$sql = "SELECT * FROM furniture order by id DESC";
	$result = mysqli_query($con, $sql);
	$nr = mysqli_num_rows($result);
	
	$no=0;
	$json = '{"data": {';
	$json .= '"object":[ ';
	while($r=mysqli_fetch_array($result))
	{					
		$json .= '{';
			$json .= 
			   '"id":"'.$r['id'].'",
			    "nama":"'.$r['nama'].'",
				"gambar":"'.$r['g1'].'",
				"seo":"'.$r['merk'].'"
			}';					
		$no++;
		if($no < $nr)
		{
			$json .= ',';
		}		
	}
	$json .= ']';
	$json .= '}}';
	echo $json;

	//close the db connection
    mysqli_close($con);
?>	