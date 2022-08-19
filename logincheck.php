<?php
$userid="";
$pass="";
$hasErr=false;
class testlogin{
public $error = array(
        'idErr'=>"",
        'passErr'=>"",
        'validityErr'=>"",
    );

 function validLogin(){
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["userid"])) {
    $hasErr=true;
    $this-> error["idErr"] = "Userid is required";
  }else{
    $userid = $_REQUEST["userid"];
  }

  

    
  if(empty($_POST["pass"]))
		{
		$hasErr=true;
		$this-> error["passErr"] = "Password required";
		}else{
    
       $pass = $_REQUEST["pass"];
  }
    

   if (!$hasErr){
    $file = fopen('reg.txt','r');
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode("|",$data);              
                if ($userid == trim($user[1]) && $pass == trim($user[3]))
                {              
                   setcookie('status', 'go', time()+60, '/');	
                   session_start();
                   $_SESSION['name']=trim($user[0]); 
                   $_SESSION['ussrid']=trim($user[1]); 
                   $_SESSION['email']=trim($user[2]); 
                   $_SESSION['password']=trim($user[3]); 
			       header('location: adminhome.php?userid='.$user[1]);
		        }
                else{
             exit('User Id or Password doesnt match');             
	        }
        }
        }
    }
 }
        function get_errors(){
        return $this -> error;
    }
}
?>