
<?php
    if(isset($_COOKIE['status']))
	{
		
?>

 <?php 
 $col=4; 
 ?>
<?php echo "<table border='1' width='350px'>";
      echo  "<tr>";
       echo "<th>"."Name"."</th>";
       echo "<th>"."Username"."</th>";
       echo "<th>"."Email"."</th>";
       echo "<th>"."User Type"."</th>";
      # echo "<th>"."action"."</th>";
       echo "</tr>";

    $file = "reg.txt";
	$lines = count(file($file));
	$row= $lines;
        for($i=1;$i<=$row;$i++)
        { 
?>

<?php    echo "<tr>";
            for($j=1;$j<=$col;$j++)
            { 
?>

 <?php 
                     
                $textf= "reg.txt";
                $all_lines=file($textf);
                $user = explode("|",$all_lines[$i-1]); 
                if($j==1)
                {
                                    echo "<td>".trim($user[0])."</td>"; 
                }
                 if($j==2)
                {
                                    echo "<td>".trim($user[1])."</td>"; 
                }
                 if($j==3)
                {
                                    echo "<td>".trim($user[2])."</td>"; 
                }
                 if($j==4)
                {
                                    echo "<td>".trim($user[6])."</td>"; 
                }

              
            }
 ?>

<?php 

               echo "</tr>";
            
        } 
?>

        <?php echo "</table>";    
    } 
    else
    {
        echo "Invalid request";
    }
?>  