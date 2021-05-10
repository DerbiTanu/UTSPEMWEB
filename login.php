<?php
session_start();
if (isset($_SESSION['username'])) {
	header('location:index.php'); }
	require_once("koneksi.php");
	?>

	<title>Form Login Game Matematika</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<div align='center'>
		<form action="proseslogin.php" method="post">
			<h1>Masuk</h1>
			<table>
				<tbody>
					<tr><td>Username</td><td>: <input type="text" name="username"></td></tr>
					<tr><td>Password</td><td>: <input type="password" name="password"></td></tr>
					<tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
					<tr><td colspan="2" align="center">Belum Punya Akun? <a href="daftar.php"><b>Daftar</b></a></td></tr>
				</tbody>
			</table>
		</form>
	</div>