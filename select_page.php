<?php
if(isset($_GET['q']))
{
	if($_GET['q']=='blog_full')
	{
		require_once 'blog_full.php';
	}
}else
{
	require_once 'blog_home.php';	
}
?>