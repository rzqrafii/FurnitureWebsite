<?php
	include "../config/koneksi.php";
	$k = new db();
	$con = mysqli_connect($k->server, $k->username, $k->password, $k->database);

	$sql = "SELECT * FROM gallery order by id DESC ";
	$result = mysqli_query($con, $sql);

    $array = array();
	$subArray=array();

    while($row =mysqli_fetch_array($result))
    {
        $subArray['id'] = $row['id'];
        $subArray['nama'] = $row['nama_gallery'];
        $subArray['gambar'] = $row['gbr_gallery'];
        $subArray['seo'] = $row['gallery_seo'];
        
        $array[] =  $subArray ;
    }

    echo'{"data":{"object":'.json_encode($array).'}}';

    //close the db connection
    mysqli_close($con);
?>