
<?php
$host = 'localhost';
$user_name = 'root';
$password = '';
$dbname = 'cs_forum';
$con = mysqli_connect($host, $user_name, $password, $dbname) or die("cannot connect");


	// Define $myusername and $mypassword
	$user_id = $_POST["user_id"];
	$password = $_POST['password'];

	$password = md5($password);

	// To protect MySQL injection (more detail about MySQL injection)
	$result = mysqli_query($con, "SELECT * FROM user WHERE user_id='$user_id' and password='$password'");
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);

 	$result_array = mysqli_fetch_array($result);
	$user_name = $result_array["user_name"];
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		session_start();
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $user_name;
		header("location:index.php");
	}else {
		echo "Wrong enrollment number or Password";
	}
	ob_end_flush();
?>
