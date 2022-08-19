<?php 
$adname="";
$userid="";
$email="";
$pass="";
$gender="";
$dob="";
$UserType="";
$hasError=false;
class testReg{
public $error = array(
        'nameErr' =>"",
        'idErr'=>"",
        'emailErr'=>"",
        'passErr'=>"",
        'conpassErr'=>"",
        'genderErr' =>"",
        'dobErr'=>"",
        'usertypeErr'=>"",
    );

 function validReg(){
  
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["adname"])) {
    $hasError=true;
    $this-> error["nameErr"] = "Name is required";
  } elseif (is_numeric($_POST["adname"]))
		{
			$hasError = true;
			$this-> error["nameErr"] = "Name can't be numeric!!";
		}
		else{
			$adname = $_REQUEST['adname'];
		}


  if (empty($_POST["userid"])) {
    $this-> error["idErr"] = "Userid is required";
  } elseif (strpos($_POST["userid"]," "))
		{
			$hasError = true;
			$this-> error["idErr"] = " UserName can't take space!!!";
		}
		else{
			$userid = $_REQUEST['userid'];
		}

  
  if (empty($_POST["email"])) {
    $hasError = true;
   $this-> error["emailErr"] = "Email is required";
  } else{
    $email = $_REQUEST['email'];
  }



    
  if(empty($_POST["pass"]))
		{
		$hasError = true;
		$this-> error["passErr"] = "Password required";
		}

		else if((strlen($_POST["pass"])< 5))
		{
		$hasError = true;
		$this-> error["passErr"] = "Password requires minimum 5 characters";
		}
		else
		{
			$pass = $_REQUEST["pass"];
		}



  if(empty($_POST["conpass"]))
		{
		$hasError = true;
		$this-> error["conpassErr"] = "Confirm Password required";
		}

		else if(strcmp($_POST["pass"], $_POST["conpass"]) !== 0)
		{
		$hasError = true;
		$this-> error["conpassErr"] = "Password doesn't match";
		}


  if (empty($_POST["gender"])) {
    $hasError = true;
    $this-> error["genderErr"] = "Gender is required";
  } else{
    $gender = $_REQUEST["gender"];
  }

   if (empty($_POST["dob"])) {
    $hasError = true;
    $this-> error["dobErr"] = "Date of Birth is required";
  } else{
    $dob = $_REQUEST["dob"];
  }

    if (empty($_POST["UserType"])) {
    $hasError = true;
    $this-> error["usertypeErr"] = "User Type is required";
  } else{
    $UserType = $_REQUEST["UserType"];
  }



if (!$hasError){
 $file = fopen('reg.txt','r');
       
          while(!feof($file))
            {
                $data = fgets($file);
                $user = explode("|",$data);              
                if ($userid == trim($user[1]))
                {          
			            exit('user already exists');    
		            }
            }

        $file = fopen('reg.txt','a');
        $user = $adname."|".$userid."|".$email."|".$pass."|".$gender."|".$dob."|".$UserType."\r\n";
        fwrite($file,$user);
        header('location: loginadmin.php');
        } 
      }  
    }
    
        function get_error(){
        return $this -> error;
    }
  }                                		        

?>