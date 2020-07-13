<?php
	include('koneksi.php');
	$k = new db();
	$con = mysqli_connect($k->server,$k->username,$k->password, $k->database);
	if (isset($_POST['submit']))
	{
		$nama=$_POST['name'];
		$mail=$_POST['email'];
		// md5
		$sub=$_POST['sub']; 

		$message=$_POST['message'];

		
		$sisip = mysqli_query($con,"INSERT INTO contactus VALUES (NULL,
			'$nama',
			'$mail',
			'$sub',
			'$message')");

		if ($sisip){
			
			header('location:contact.html?success');
		}
		else{
			echo "<script>alert('Can't Create Account')</script>";
		}
	}
?>