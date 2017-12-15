<?php
	include("../db_connect.php");
?>
<?php
	if(isset($_POST['submit']))
	{
		$email=$_POST['mail'];
		$password=$_POST['pwd'];
		// For User Log In Check
		$query=mysql_query("SELECT *FROM user where user_email='$email' and user_pwd='$password'");
		$row=mysql_fetch_row($query);
		$user=mysql_num_rows($query);//user Log In Check End
		// For Admin Log In
		$query=mysql_query("SELECT *FROM admin where ad_email='$email' and ad_pwd='$password'");
		$row=mysql_fetch_row($query);
		$admin=mysql_num_rows($query);//admin Log in check end

		
		if($admin==1)
		{
			echo "Congratulation You Are Our Admin";
			header('location:../dash_board/dash_board.php');
		}
		else if($user==1)
		{
			echo "Congratulation You are Our User";
		}
		else
		{
			echo "<script>window.location='../login.php'; </script>";
		}

	}

?>
