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

 <style>
    nav a{
      list-style-type: none;
    }
 </style>
<head>
  <body>
    <div class="pane">
      <div class="header"><h1><a href="#">Welcome to Computer Science forum</a></div>
          <?php
          session_start();
          if(isset($_SESSION['user_id'])){
            include('navbar.html');
          }
          if(isset($_GET['status'])){
            if($_GET['status'] == 'reg_success'){
              echo '<center><h2 style="color:green"> New User registered</h2></center>';
            }
          }

          ?>

          <div class="content">
            <?php dispcategories(); ?>
          </div>
    </div>
  </body>
</html>
