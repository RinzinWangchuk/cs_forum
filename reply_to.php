<?php
	include ('content_function.php');
	addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
?>
<html>
<head><title>CS forum</title>
<script src="js/gen_validatorv4.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
      <?php
			session_start();
			if(isset($_SESSION['user_id'])){
				include('navbar.html');
			}
      ?>
		<div class="content">
			<?php disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']); ?>
		</div>


    <?php
			if (isset($_SESSION['user_id'])) {
        dispreplies($_GET['cid'], $_GET['scid'], $_GET['tid']);
        replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);
			}
		?>

	</div>
</body>
</html>
