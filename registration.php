<?php
	session_start();
	include("db_connect.php");
?>

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
        <div class="status">
			<?php
			$check_box=0;
			$full_name=0;
			$name=0;
			$nblen=0;
			$cmpwd=0;
			$passlen=0;
			$name_take=0;
			$mail_taken=0;
			
            if(isset($_POST['submit']))
            {
                @$check=$_POST['check'];
                $user_full_name=$_POST['full_name'];
                $user_name=$_POST['u_name'];
                $user_email=$_POST['email'];
                $user_phone_number=$_POST['phone'];
                $user_pwd=$_POST['pwd'];
                @$cm_pwd=$_POST['cm_pwd'];
                $lenth=strlen($user_pwd);
                $number_lenth=strlen($user_phone_number);
            
            
                if($check!='yes')
                {
                    //echo "Please Click Check Box First!";
                    $check_box=1;
                }
                else if($user_full_name=='')
                {
                    //echo "Please Enter Your Full Name";
                    $full_name=1;
                }
                else if($user_name=='')
                {
                    //echo "Please Enter Your Name";
                    $name=1;
                }
                else if($number_lenth < 11)
                {
                    //echo "Please Enter Your Valid Phone Number";
                    $nblen=1;
                }
                else if($user_pwd!=$cm_pwd)
                {
                    //echo "Your Conferm Password Is Not Matching";
                    $cmpwd=1;
                }
                else if($lenth < '6')
                {
                    //echo "Password Charecter Must Be At Lest 6 Charecter";
                    $passlen=1;
                }
                else
                {
                    //Name Availability Check 
                    $name_query=mysql_query("Select * FROM user where user_name='$user_name'");
                    $name_check=mysql_num_rows($name_query);//Name Availability Check End
                    
                    //Email Availability Check 
                    $email_query=mysql_query("Select * FROM user where user_email='$user_email'");
                    $email_check=mysql_num_rows($email_query);//Email Availability Check End
                            
                    if($name_check==1)
                    {
                        //echo "This Name Is Already Used";
                        $name_take=1;
                    }
                    else if($email_check==1)
                    {
                        //echo "This Email Is Already Sign Up Please Log In ";
                        $mail_taken=1;
                    }
                    else
                    {
                        
                        $_SESSION['user_full_name']=$user_full_name;
                        $_SESSION['user_name']=$user_name;
                        $_SESSION['user_email']=$user_email;
                        $_SESSION['user_phone_number']=$user_phone_number;
                        $_SESSION['user_pwd']=$user_pwd;
                        echo "<script>alert('Congratulation You are successfully Registared'); </script>";
                        header("location:insert/user_insert.php");
                    }
                }
                
            }
            
            ?>        

		</div>
    	<div class="row" id="form" style="padding:5%; margin:0 auto; background-color:#333; color:#096; height:auto; margin:0 auto;">
                <form action="#"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form" style="width:100%">
                      <div class="form-group">
                        <label class="control-label col-sm-2" >Full Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="full_name" placeholder="Enter Your Name">
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($full_name==1){echo "Please Enter Your Full Name";}?></h5>

                      <div class="form-group">
                        <label class="control-label col-sm-2">User Name:</label>
                        <div class="col-sm-10">
                          <input type="us_name" class="form-control" name="u_name" placeholder="Enter User Name">
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($name==1){echo "Please Enter Your Name";}?></h5>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($name_take==1){echo "This Name Is Already Used";}?></h5>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="email">User Email:</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($mail_taken==1){echo "This Email Is Already Sign Up Please Log In";}?></h5>

                      <div class="form-group">
                        <label class="control-label col-sm-2">Phone No:</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($nblen==1){echo "Please Enter Your Valid Phone Number";}?></h5>

                      <div class="form-group">
                        <label class="control-label col-sm-2"  for="pwd">Password:</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="pwd" placeholder="Enter password At lest 6 Charecter">
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($passlen==1){echo "Password Charecter Must Be At Lest 6 Charecter";}?></h5>

                      <div class="form-group">
                        <label class="control-label col-sm-2"  for="pwd">Conferm Password:</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="cm_pwd" placeholder="ReEnter password">
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($cmpwd==1){echo "Your Conferm Password Is Not Matching";}?></h5>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label><input type="checkbox" name="check" value="yes"> Agree</label>
                          </div>
                        </div>
                      </div>
                      <h5 style="text-align:left; padding-left:17%; color:#F00"> <?php if($check_box==1){echo "Please Click Check box first";}?></h5>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default" name="submit">Sign Up</button>
                        </div>
                      </div>
                </form>	
            </div>
			<?php include("footer.php");?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>

