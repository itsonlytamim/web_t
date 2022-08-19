<?php
    if(isset($_COOKIE['status']))
	{
		$uid = $_REQUEST["userid"];
?>

<html>
<head>
	<title>Admin Home Page</title>

</head>
<body>
	<fieldset style = "color:white;width: 500px; margin:  0px auto; background-color:rgb(40, 80, 83);">
        <h1>Welcome, <?php echo $uid ?></h1><br>
		<a href="adminprofile.php" style="color:#FF0000;"> Profile</a> <br><br>    
		<a href="viewUsers.php" style="color:#FF0000;"> View Users</a><br><br>
        <a href="viewPosts.php" style="color:#FF0000;"> View Posts</a><br><br>
        <a href="logout.php" style="color:#FF0000;">Log-out</a>
	</fieldset>
</body>
</html>

<?php
    }
    else
    {
        echo "Invalid request";
    }
?>