<?php
	session_start();

	include ('db_connect.php');

	$comment = nl2br(addslashes($_POST['comment']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	$tid = $_GET['tid'];

	$insert = mysqli_query($con, "INSERT INTO replies (`category_id`, `subcategory_id`, `topic_id`, `author`, `comment`, `date_posted`)
								  VALUES ('".$cid."', '".$scid."', '".$tid."', '".$_SESSION['user_name']."', '".$comment."', NOW());");

	if ($insert) {
		header("Location: /cs_forum/read_topic.php?cid=".$cid."&scid=".$scid."&tid=".$tid."");
	}
?>
