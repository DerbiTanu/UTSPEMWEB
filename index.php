<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('location:login.php');
} else { 
  $username = $_SESSION['username'];
}
?>

<tittle>Login Sukses</tittle>
<div align = 'center'>
  Selamat Datang, <b> <?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>
<div align='center'>
  Silahkan Bermain, <b><?php echo $username;?></b> <a href="game.php"><b>Game</b></a>
</div>
