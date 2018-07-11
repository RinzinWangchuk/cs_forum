<?php
	include ('content_function.php');
?>
<html>
<head><title>CS forum</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script src="js/gen_validatorv4.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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

		<div class="content">
			<?php
				if (isset($_SESSION['user_id'])) {
					echo "<form  name='topics' action='/cs_forum/add_new_topic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
						  method='POST'>
						  <p>Title:
							<div id='topics_topic_errorloc' style='color:red; font-size:12px'></div>
							 </p>
						  <input type='text' id='topic' name='topic' size='100' />
						  <p>Content:
							<div id='topics_content_errorloc' style='color:red; font-size:12px'></div>
							</p>
						  <textarea id='content' name='content'></textarea><br />
						  <input type='submit' value='add new post' /></form>
							<script>
								var val = new Validator('topics');
								val.addValidation('topic', 'req', 'You cannot leave it empty!');
								val.addValidation('topic', 'minlen=8', 'minimum length shoud be 8');
								val.addValidation('content', 'req', 'You cannot leave it empty');
								val.addValidation('content', 'minlen=10', 'minimum length shoud be 10');
								val.EnableOnPageErrorDisplay();
								val.EnableMsgsTogether();
							</script>

							";
				}
			?>
		</div>
	</div>
</body>
</html>
