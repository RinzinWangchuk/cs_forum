<?php

  include('db_connect.php');

  $con = mysqli_connect($host, $user_name, $password, $dbname) or die("cannot connect");

  $user_id = $_POST['user_id'];
  $newuser = $_POST['user_name'];

  $password = $_POST['password'];

  $password = md5($password);

  $insert = mysqli_query($con, "INSERT INTO user(`user_id`,`user_name`, `password`) VALUES('$user_id', '$newuser', '$password')");

  if($insert){
    session_start();
		$_SESSION['user_id'] = $user_id;
    header("Location:/cs_forum/index.php?status=reg_success");
  }else {
    echo "<center><h3>User Name not valid</h3></center>";
  }

?>
