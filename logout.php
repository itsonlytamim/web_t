<?php 
	setcookie('status', 'true', time()-1000, '/');
	header('location: loginadmin.php');
?>