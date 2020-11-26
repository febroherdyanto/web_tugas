<?php
    if (isset($_GET['pesan'])) {
        echo $_GET['pesan'];
	}


	session_start();
    if(!isset($_SESSION['id_user'])){
       
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>	
</head>
<body>
	<h1>Welcome to Login Page</h1>
	<form action="" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

include '../xconfig/xconfig.php';

if(isset($_POST['login'])){

	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$qlog=mysqli_query($koneksi,"select id_user,nama_user,status,username,password from xuser where username='$username' and password='$password'");

	if(mysqli_num_rows($qlog)==1){
		while($data=mysqli_fetch_array($qlog)){
				session_start();
				$_SESSION['id_user']=$data['id_user'];
				$_SESSION['nama_user']=$data['nama_user'];
				$_SESSION['status']=$data['status'];
				header('location:index.php?page=Utama');
		}
	}else{
		header('location:login.php?pesan=Maaf Username atau Password salah');
	}

}
?>

<?php

	}else{
		header('location:index.php');
	}