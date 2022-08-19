<?php
    if(isset($_COOKIE['status']))
	{

        session_start();
        $usrname = $_SESSION['name'];
        $usrmail = $_SESSION['email'];	
?>

<html>

  <head>

    <title> Profile </title>

  </head>

      <body>

      <form action="passchange.php" method="post" enctype="">

           <table border="1">

                 <tr>

                   <th colspan="2">

                   <h1> profile <h1>

                  </th> 

                 </tr>



<tr>

<td> Name </td>

<td> <?php echo $usrname ?> </td>



</tr>

<tr>

<td> Email </td>

<td> <?php echo $usrmail ?></td>


</tr>

<tr>

<td> Type previous Password </td>

<td>  <input type="password" name="prevpass" value=""/> </td>

</tr>

<tr>

<td> Type New Password </td>

<td>  <input type="password" name="newpass" value=""/> </td>

</tr>

<tr>


<td>  <input type="submit" name="Chngpass" value="Change Password"/>
    <?php 
    
    ?>
</td>

</tr>

</table>
</form>
</body>

</html>

<?php
    }
    else
    {
        echo "Invalid request";
    }
?>