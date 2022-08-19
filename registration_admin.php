<?php



    require_once "regcheck.php";
    $fd_admin= new testReg();
    $validating=$fd_admin->validReg();
    $error=$fd_admin->get_error();

    $nameErr=$error["nameErr"];
    $idErr=$error["idErr"];
    $emailErr=$error["emailErr"];
    $passErr=$error["passErr"];
    $conpassErr=$error["conpassErr"];
    $genderErr=$error["genderErr"];
	$dobErr=$error["dobErr"];
	$usertypeErr=$error["usertypeErr"];

?>
<html>
<head>
	<title>REGIRSTRATION</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
         <fieldset style = "color:white;width: 500px; margin:  0px auto; background-color:rgb(40, 80, 83);">
    			<legend style="background-color:rgb(89, 134, 137);" >REGISTRATION</legend>
                <br><br>

                Name<br> <input type="text" name="adname" value=""/> 
				 <span class="error"; style="color:#FF0000">* <?php echo $nameErr;?></span>
				 <br><br>

				Id <br> <input type="text" name="userid" value=""/> 
				 <span class="error"; style="color:#FF0000">* <?php echo $idErr;?></span>
				 <br><br>

                Email<br> <input type="text" name="email" value=""/>
				<span class="error"; style="color:#FF0000">* <?php echo $emailErr;?></span>
				 <br><br>

				Password<br> <input type="password" name="pass" value=""/> 
				<span class="error"; style="color:#FF0000">* <?php echo $passErr;?></span>
				<br><br>

				Confirm Password<br> <input type="password" name="conpass" value=""/> 
				<span class="error"; style="color:#FF0000">* <?php echo $conpassErr;?></span>
				<br><br>

                Gender<br>	<input type="radio" name="gender" value="Male"> Male <br><br>
							<input type="radio" name="gender" value="Female"> Female <br><br>
							<input type="radio" name="gender" value="Other"> Other<br><br>
							<span class="error"; style="color:#FF0000">* <?php echo $genderErr;?></span> 
							<br><br>

                Date of Birth<br>
						<input type="date" name="dob" value="" >
						<span class="error"; style="color:#FF0000">* <?php echo $dobErr;?></span> 
						<br><br>

                <hr>	
				User type <br><br>
				<input type="radio" name="UserType" value="User"> User
				<input type="radio" name="UserType" value="Admin"> Admin
				<br><br>
				<span class="error"; style="color:#FF0000">* <?php echo $usertypeErr;?></span>
				<br><br>
				<input type="submit" name="signup" value="Signup"/>
				<a href="loginadmin.php"  style="color:#FF0000;">Sign In</a>
		</fieldset>
	</form>
</body>
</html>