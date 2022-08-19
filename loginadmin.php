<?php
if(isset($_GET['Message'])){
    echo "logout successful";
}
    require_once "logincheck.php";
    $loginAdmin= new testlogin();
    $valid=$loginAdmin->validLogin();
    $error=$loginAdmin->get_errors();

    $idErr=$error["idErr"];
    $passErr=$error["passErr"];
	$validityErr=$error["validityErr"];

?>

    <html>

    <head>
        <title>Sign In</title>
    </head>

    <body>
        <fieldset style="color:white;width: 500px; margin:  0px auto; background-color:rgb(40, 80, 83);">
            <legend style="background-color:rgb(89, 134, 137);">Login</legend>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                User Id<br> <input type="text" name="userid" value="" /> 
                <span class="error"; style="color:#FF0000">* <?php echo $idErr;?></span>
                <br><br>
                 Password
                <br><input type="password" name="pass" value="" /> 
                <span class="error"; style="color:#FF0000">* <?php echo $passErr;?></span>
                <br>
                <br>
                <hr>
                <span class="error"; style="color:#FF0000">* <?php echo $validityErr;?></span>
                <br> <br>
                <input type="submit" name="login" value="Login" />
                <a href="registration_admin.php" style="color:#FF0000;">Register </a>
        </fieldset>
        </form>
    </body>

    </html>