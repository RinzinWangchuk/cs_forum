<?php
	session_start();

	include ('db_connect.php');

	$topic = addslashes($_POST['topic']);
	$content = nl2br(addslashes($_POST['content']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];

	$insert = mysqli_query($con, "INSERT INTO topics (`category_id`, `subcategory_id`, `author`, `title`, `content`, `date_posted`)
								  VALUES ('".$cid."', '".$scid."', '".$_SESSION['user_name']."', '".$topic."', '".$content."', NOW());");

	if ($insert) {
		header("Location: /cs_forum/topics.php?cid=".$cid."&scid=".$scid."");
	}
?>
