<?php
	include "../config/koneksi.php";
	$k = new db();
	$con = mysqli_connect($k->server, $k->username, $k->password, $k->database);
	$username = $_GET["username"];
	$password = $_GET["password"];
	
	$sql = "SELECT * FROM tb_cust WHERE nama = '$username' AND password = '$password' ";
	$result = mysqli_query($con, $sql);
	$cek = mysqli_num_rows($result);

	$array = array();
	$subArray=array();
	while($row =mysqli_fetch_array($result))
    {
        $subArray['id'] = $row['id_cust'];
        $subArray['nama'] = $row['nama'];
        $_SESSION["user"] = $subArray['nama'];
        
    }
	if ($cek>0)
	{	
		$subArray['status'] = "OK";
		$array[] =  $subArray ;
	} else {
		$subArray['status'] = "FAILED";
		$array[] =  $subArray ;
	}
	echo'{"data":{"object":'.json_encode($array).'}}';
	mysqli_close($con);
?>
