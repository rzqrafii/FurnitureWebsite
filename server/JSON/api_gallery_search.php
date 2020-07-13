<?php
	include "../config/koneksi.php";
	$k = new db();
	$con = mysqli_connect($k->server, $k->username, $k->password, $k->database);
	$cari = $_GET["search"];
	
	$sql = "SELECT * FROM gallery where nama_gallery LIKE '%$cari%' ";
	$result = mysqli_query($con, $sql);
    $array = array();
	$subArray=array();

    $server=$k->host_data;
    while($row =mysqli_fetch_array($result))
    {
        $subArray['id'] = $row['id'];
        $subArray['nama'] = $row['nama_gallery'];
        $subArray['gambar'] = "http://$server/project_sister/server/img_gallery/".$row['gbr_gallery'];
        $subArray['seo'] = $row['gallery_seo'];        
        $array[] =  $subArray ;
    }
    echo'{"data":{"object":'.json_encode($array).'}}';
    mysqli_close($con);
?>
