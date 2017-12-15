<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computer world student portal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main">
		<?php include("header.php");?>
		<?php include("menu.php");?>

        <div class="row" style="padding:5%; margin:0 auto; background-color:#333; color:#096; height:auto; margin:0 auto;">
			<div style="height:auto; padding:2%; width:75%; padding-top:0px; border-radius:3px;  margin:0 auto; text-align:center; color:#C39; background-color:#FFF;">
            	<p style="text-align:center; padding-top:3%">Soory Your Passowr Or Email Is Wrong Please Enter Valid Email And Password</p>
			</div>
            <form class="" method="post" style="width:100%" action="conferm/login_check.php">
                <div class="form-group">
                    <h2 style="color:#CCC;"> Login First</h2><br>
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Email" name="mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" placeholder="Password" name="pwd" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-default">Sign in</button>
            </form>
        </div>
        <?php include("footer.php");?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>

