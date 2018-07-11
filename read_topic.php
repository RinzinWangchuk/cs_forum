<?php
	include ('content_function.php');
	addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
?>
<html>
<head><title>CS forum</title></head>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	<div class="pane">
      <?php
      session_start();
      if(isset($_SESSION['user_id'])){
    		include('navbar.html');
      }else {
        if(isset($_GET['status'])){
          if($_GET['status'] == 'reg_success'){
						include('navbar.html');
						echo '<h1 style="color:green"> New User registered';
          }
        }
      }
      ?>

		<div class="forumdesc">
			<p>Welcome to Computer Science forum</p>

      <?php
				replylink($_GET['cid'], $_GET['scid'], $_GET['tid']);
			?>
		</div>
		<?php
			disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
			echo "<div class='content'><p>All Replies (".countReplies($_GET['cid'], $_GET['scid'], $_GET['tid']).")
				  </p></div>";
			dispreplies($_GET['cid'], $_GET['scid'], $_GET['tid']);
		?>
	</div>
</body>
</html>
