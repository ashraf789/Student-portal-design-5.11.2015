<?php
	include("../db_connect.php");
?>
<?php
	session_start();
	
		$user_full_name=$_SESSION['user_full_name'];
		$user_name=$_SESSION['user_name'];
		$user_email=$_SESSION['user_email'];
		$user_phone_number=$_SESSION['user_phone_number'];
		$user_pwd=$_SESSION['user_pwd'];



		$query=mysql_query("INSERT INTO user(user_full_name,user_name,user_email,user_phone_number,user_pwd) 
		VALUES('$user_full_name','$user_name','$user_email','$user_phone_number','$user_pwd')");

		/*$query=mysql_query("INSERT INTO admin(ad_full_name,ad_name,ad_email)
		VALUES('$user_full_name','$user_name','$user_email')"); */

		
		if($query)
		{
			echo "Congratulation You Successfully Registared";
		}
		else
		{
			echo "Your Registratiion Is failed Please Try Again Later";
		}
?>