<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQL | MalasNgoding.com</title>	
</head>
<body>
	<h1>Membuat Login Dengan PHP dan MySQL</h1>
	<h3>Halaman Login Sederhana</h3>
	<form action="login.php" method="post">		
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

$qlog=mysqli_query($koneksi,"select * from xuser where username='$username' and password='$password'");
$cek=mysqli_num_rows($qlog);

if($cek==0){
	echo "LOGIN BERHASIL";
}else{
	echo "USER TIDAK ADA";
}
}
?>
