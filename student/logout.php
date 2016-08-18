<?php
	session_start();
	unset($_SESSION['students']);
	
	//unset($_COOKIE['login_name']);
	//setcookie('login_name', null, time()-3600, '/');

	header('Location: ./');
?>