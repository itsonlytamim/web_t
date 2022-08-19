<?php
    if(isset($_COOKIE['status']))
	{
        $prevp = $_REQUEST['prevpass'];
        $newp = $_REQUEST['newpass'];
        $file = fopen('reg.txt','r+');
        session_start();
        $usrpass = $_SESSION['password'];
        $ussrid =  $_SESSION['ussrid'];

      if($usrpass !=$prevp && $ussrid != null){

        echo "Password didn't match, try again";

      }
        else{
            
           while(!feof($file))
            {
                $data = fgets($file);
                $user = explode("|",$data);                  
                if ($ussrid == trim($user[1]))
                {       
                   $chng = str_replace(trim($user[3]),$newp,$data);
                   fwrite($file,$chng);
                   echo "Password changed";         
		        }             
          
        }
    }
 
    }
    else
    {
        echo "Invalid request";
    }
  
?>