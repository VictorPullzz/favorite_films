<?php
session_start();
if($_SESSION['STATUS'] = "login")
{
	if ($_COOKIE['user']) 
	{	
		setcookie('user', '', strtotime('-30 days'), '/');	 
		unset($_COOKIE['user']);
	}
	session_unset();
	exit(header('Location:/'));
}

?>