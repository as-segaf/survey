<?php 
	session_start();
	include'config.php';
	$username = $_POST['username'];
	$password = trim($_POST['password']);
	$select   = mysqli_query($host, "SELECT * FROM user WHERE username='$username'");
	$hasil    = mysqli_fetch_array($select); 
	$cek  	  = mysqli_num_rows($select);

	if (mysqli_num_rows($select) != 0) {
		if ($password == $hasil['password']) {
			if ($hasil['role'] == "1") {
				$_SESSION['id_user']  = $hasil['id'];
				$_SESSION['id_role']  = $hasil['role'];
				$_SESSION['username'] = $hasil['username'];
				$_SESSION['role']     = "user";
				header('location:../user/index.php');

			}else if ($hasil['role'] == "2") {
				$_SESSION['id_user']  = $hasil['id'];
				$_SESSION['id_role']  = $hasil ['role'];
				$_SESSION['username'] = $hasil['username'];
				header('location:../admin/index.php');

			}
		}else{
			header('location:../index.php?pesan=passwordsalah');
			
		}
	}else{
		header('location:../index.php?pesan=akun_tidak_ada');
	}





















 ?>