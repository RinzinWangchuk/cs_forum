<?php
  include('content_function.php');
?>

<html>
<head><title>CS forum</title>

<link rel="stylesheet" href="css/main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
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
            <p>Welcome to Computer Science fourm</p>
          </div>
            <?php
              if(isset($_SESSION['user_name'])){
                 echo "<div class='content'><p><a href='/cs_forum/new_topic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'>
					  add new topic</a></p></div>";
              }
            ?>
          <div class="content">
            <?php disptopics($_GET['cid'], $_GET['scid']); ?>
          </div>
    </div>
  </body>
</html>
