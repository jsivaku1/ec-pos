<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seating Arrangement for Internal Examinations</title>
</head>
<SCRIPT language=JavaScript>


function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>

<body>

</body>
</html>
<?php
echo '<div id=printableArea>';	
echo "<style>";
echo "td";
echo "{";
echo "font-size:10px;";
echo "text-align:center;";
echo "}";
echo "</style>";
$newline = "<br />";
 echo "<center><b><u>ANNA UNIVERSITY :: CHENNAI</u></b></center>";	
 echo $newline;
 echo "<center><b><u>SEATING ARRANGEMENT FOR INTERNAL EXAMINATIONS</u></b></center>";
 echo $newline;
 //Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$tot=45;
//  $t=$tot/3;
  
 $dept=clean($_POST['dept']);
 //echo $dept;
 $servername='localhost';
 $dbusername='root';
 $dbpassword='';
 $dbname=$dept;
 $ctype=clean($_POST['ctype']);
 $rtype=clean($_POST['rtype']);
 $row1=array();
 $row2=array();
 $row3=array();
 
 $srn=clean($_POST['srn']);
 $srn=$srn-1;
 $ern=clean($_POST['ern']);
 $t=$ern-$srn;
 //echo $dbname;
 
 for($i=0;$i<40;$i++)
  			{ $value1[$i]='-';
				$value2[$i]='-';
				$value3[$i]='-';
			}
 $link1 = connecttodb($servername,$dbname,$dbusername,$dbpassword);
 if($ctype==3)
 {
 if($rtype==1)
 {
	 $sem1=clean($_POST['semtype1']);
 switch ($sem1)
	{
		case "1": case "2":
		{
	      $qry1 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry1 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry1 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry1 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
 }
 else if($rtype==2)
 {
	 $sem1=clean($_POST['semtype1']);
 	 $sem2=clean($_POST['semtype2']);
	  switch ($sem1)
	{
		case "1": case "2":
		{
	      $qry1 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry1 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry1 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry1 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
	switch ($sem2)
	{
		case "1": case "2":
		{
	      $qry2 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry2 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry2 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry2 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
 }
 else 
 {$sem1=clean($_POST['semtype1']);
  $sem2=clean($_POST['semtype2']);
$sem3=clean($_POST['semtype3']);
	 switch ($sem1)
	{
		case "1": case "2":
		{
	      $qry1 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry1 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry1 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry1 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
	switch ($sem2)
	{
		case "1": case "2":
		{
	      $qry2 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry2 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry2 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry2 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}

	 switch ($sem3)
	{
		case "1": case "2":
		{
	      $qry3 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry3 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry3 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "7": case "8" :
		{
	      $qry3 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
 }
 switch($rtype)
	{
		
		 case "1" :  	 		
 echo "THE <b>SEATING ARRANGEMENT</b> IS \n";
 
 echo "<table border='2' width='150' cellpadding='5'>";
 					echo "<tr>";
				    echo "<th> I";
				    echo "<th> II";
    				echo "<th> III";
	   				echo "</tr>";
 					echo "<tr>";
    				echo "<td> 1"."</td>";
    				echo "<td> 6"."</td>";
			    	echo "<td> 11"."</td>";
			    	echo "</tr>";
			        echo "<tr>";
			    	echo "<td> 2"."</td>";
			    	echo "<td> 7"."</td>";
			    	echo "<td> 12"."</td>";
			    	echo "</tr>";
					echo "<tr>";
			    	echo "<td> 3"."</td>";
			    	echo "<td> 8"."</td>";
			    	echo "<td> 13"."</td>";
			    	echo "</tr>";
					echo "<tr>";
					echo "<td> 4"."</td>";
					echo "<td> 9"."</td>";
					echo "<td> 14"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 5"."</td>";
					echo "<td> 10"."</td>";
					echo "<td> 15"."</td>";
					echo "</tr>";
	   				echo "</table>";
						
		 for($i=0;$i<($ern-$srn);$i++)
  		 				$value1[$i]=mysql_result($result1,$i,"Rollno");
	 echo "THE <b>SEAT NUMBERING</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Semester :".$sem1;
					echo "</tr>";
					echo "<tr>";
					echo "<td>";			  
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
				    echo "<th> <b>Seat Number</b>";
				    echo "<th> <b>Reg Number</b>";
	
				    echo "</tr>";
	 $j=1;
	 for($i=0;$i<15;$i++)
	{
	
		 			echo "<tr>";
       				echo "<td><center>".$j."</td>";
    				echo "<td><center>".$value1[$i]."</td>";
    				echo "</tr>";
					$j++;
	}
	 echo "</table>";
	 echo "</table>";
	 break;
	 
	case "2" :
	  //to create two seater arrangement
					echo "THE <b>SEATING ARRANGEMENT</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> I";
					echo "<th> II";
					echo "<th> III";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 1|16"."</td>";
					echo "<td> 6|21"."</td>";
					echo "<td> 11|26"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 2|17"."</td>";
					echo "<td> 7|22"."</td>";
					echo "<td> 12|27"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 3|18"."</td>";
					echo "<td> 8|23"."</td>";
					echo "<td> 13|28"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 4|19"."</td>";
					echo "<td> 9|24"."</td>";
					echo "<td> 14|29"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 5|20"."</td>";
					echo "<td> 10|25"."</td>";
					echo "<td> 15|30"."</td>";
					echo "</tr>";
 					echo "</table>";
			 		
					for($i=0;$i<($ern-$srn);$i++)
					{
						 $value1[$i]=mysql_result($result1,$i,"Rollno");
						 $value2[$i]=mysql_result($result2,$i,"Rollno");
						
					}
				    echo "<br>";
	                echo "THE <b>SEAT NUMBERING</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Semester :".$sem1;
					echo "<th> Semester :".$sem2;
					echo "</tr>";
					echo "<tr>";
					echo "<td>";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					 $j=1;
	 					for($i=0;$i<15;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$j."</td>";
    						echo "<td><center>".$value1[$i]."</td>";
    						echo "</tr>";
							$j++;
							}
						 echo "</table>";
						 echo "<td>";
						 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					$k=16;
	 					for($i=0;$i<15;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$k."</td>";
    						echo "<td><center>".$value2[$i]."</td>";
    						echo "</tr>";
							$k++;
							}
							echo "</table>";
							echo "</table>";
						 break;
	
	case "3" :
//seating arrangement for three seater
					echo "THE <b>SEATING ARRANGEMENT</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> I";
					echo "<th> II";
					echo "<th> III";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 1|16|31"."</td>";
					echo "<td> 6|21|36"."</td>";
					echo "<td> 11|26|41"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 2|17|32"."</td>";
					echo "<td> 7|22|37"."</td>";
					echo "<td> 12|27|42"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 3|18|33"."</td>";
					echo "<td> 8|23|38"."</td>";
					echo "<td> 13|28|43"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 4|19|34"."</td>";
					echo "<td> 9|24|39"."</td>";
					echo "<td> 14|29|44"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td> 5|20|35"."</td>";
					echo "<td> 10|25|40"."</td>";
					echo "<td> 15|30|45"."</td>";
					echo "</tr>";
				    echo "</table>";
					
					for($i=0;$i<($ern-$srn);$i++)
					{
						 $value1[$i]=mysql_result($result1,$i,"Rollno");
						 $value2[$i]=mysql_result($result2,$i,"Rollno");
						 $value3[$i]=mysql_result($result3,$i,"Rollno");
					}
					echo "<br>";
	                echo "THE <b>SEAT NUMBERING</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Semester :".$sem1;
					echo "<th> Semester :".$sem2;
					echo "<th> Semester :".$sem3;
					echo "</tr>";
					echo "<tr>";
					
					echo "<td>";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					
					$j=1;
	 					for($i=0;$i<15;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$j."</td>";
    						echo "<td><center>".$value1[$i]."</td>";
    						echo "</tr>";
							$j++;
							}
						 echo "</table>";
						 echo "<td>";
						 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					$k=16;
	 					for($i=0;$i<15;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$k."</td>";
    						echo "<td><center>".$value2[$i]."</td>";
    						echo "</tr>";
							$k++;
							}
							echo "</table>";
						 echo "<td>";
						 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					$l=31;
	 					for($i=0;$i<15;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$l."</td>";
    						echo "<td><center>".$value3[$i]."</td>";
    						echo "</tr>";
							$l++;
							}
							echo "</table>";
							echo "</table>";
						 break;
	}
 }
 else if($ctype==4)
 {
	 if($rtype==1)
 {
	 $sem1=clean($_POST['semtype1']);
 switch ($sem1)
	{
		case "1": case "2":
		{
	      $qry1 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry1 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry1 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry1 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
 }
 else if($rtype==2)
 {
	 $sem1=clean($_POST['semtype1']);
 	 $sem2=clean($_POST['semtype2']);
	  switch ($sem1)
	{
		case "1": case "2":
		{
	      $qry1 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry1 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry1 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry1 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
	switch ($sem2)
	{
		case "1": case "2":
		{
	      $qry2 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry2 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry2 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry2 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
 }
 else 
 {$sem1=clean($_POST['semtype1']);
  $sem2=clean($_POST['semtype2']);
$sem3=clean($_POST['semtype3']);
	 switch ($sem1)
	{
		case "1": case "2":
		{
	      $qry1 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry1 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry1 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry1 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
	switch ($sem2)
	{
		case "1": case "2":
		{
	      $qry2 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry2 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry2 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "7": case "8":
		{
	      $qry2 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}

	 switch ($sem3)
	{
		case "1": case "2":
		{
	      $qry3 = "SELECT Rollno FROM y1 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "3": case "4":
		{
	      $qry3 = "SELECT Rollno FROM y2 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "5": case "6":
		{
	      $qry3 = "SELECT Rollno FROM y3 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "7": case "8" :
		{
	      $qry3 = "SELECT Rollno FROM y4 LIMIT $srn,$ern";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "default":
		break;
	}
 }
 switch($rtype)
	{
		
		 case "1" :  	 		
 echo "THE <b>SEATING ARRANGEMENT</b> IS \n";
 
 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
				    echo "<th> I";
				    echo "<th> II";
    				echo "<th> III";
					echo "<th> IV";
	   				echo "</tr>";
 					echo "<tr>";
    				echo "<td> 1"."</td>";
    				echo "<td> 6"."</td>";
			    	echo "<td> 11"."</td>";
					echo "<td> 16"."</td>";
			    	echo "</tr>";
			        echo "<tr>";
			    	echo "<td> 2"."</td>";
			    	echo "<td> 7"."</td>";
			    	echo "<td> 12"."</td>";
			    	echo "<td> 17"."</td>";					
			    	echo "</tr>";
					echo "<tr>";
			    	echo "<td> 3"."</td>";
			    	echo "<td> 8"."</td>";
			    	echo "<td> 13"."</td>";
			    	echo "<td> 18"."</td>";					
			    	echo "</tr>";
					echo "<tr>";
					echo "<td> 4"."</td>";
					echo "<td> 9"."</td>";
					echo "<td> 14"."</td>";
			    	echo "<td> 19"."</td>";					
					echo "</tr>";
					echo "<tr>";
					echo "<td> 5"."</td>";
					echo "<td> 10"."</td>";
					echo "<td> 15"."</td>";
			    	echo "<td> 20"."</td>";					
					echo "</tr>";
	   				echo "</table>";
 	
		 for($i=0;$i<($ern-$srn);$i++)
  		 				$value1[$i]=mysql_result($result1,$i,"Rollno");
	 echo "THE <b>SEAT NUMBERING</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Semester :".$sem1;
					echo "</tr>";
					echo "<tr>";
					echo "<td>";			  
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
				    echo "<th> <b>Seat Number</b>";
				    echo "<th> <b>Reg Number</b>";
	
				    echo "</tr>";
	 $j=1;
	 for($i=0;$i<20;$i++)
	{
	
		 			echo "<tr>";
       				echo "<td><center>".$j."</td>";
    				echo "<td><center>".$value1[$i]."</td>";
    				echo "</tr>";
					$j++;
	}
	 echo "</table>";
	 echo "</table>";
	 break;
	 
	case "2" :
	  //to create two seater arrangement
					echo "THE <b>SEATING ARRANGEMENT</b> IS \n";
					echo "<table border='2' width='250' cellpadding='5'>";
					echo "<tr>";
					echo "<th> I";
					echo "<th> II";
					echo "<th> III";
					echo "<th> IV";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  1 | 21"."</td>";
					echo "<td>  6 | 26"."</td>";
					echo "<td> 11 | 31"."</td>";
					echo "<td> 16 | 36"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  2 | 22"."</td>";
					echo "<td>  7 | 27"."</td>";
					echo "<td> 12 | 32"."</td>";
					echo "<td> 17 | 37"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  3 | 23"."</td>";
					echo "<td>  8 | 28"."</td>";
					echo "<td> 13 | 33"."</td>";
					echo "<td> 18 | 38"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  4 | 24"."</td>";
					echo "<td>  9 | 29"."</td>";
					echo "<td> 14 | 34"."</td>";
					echo "<td> 19 | 39"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  5 | 25"."</td>";
					echo "<td> 10 | 30"."</td>";
					echo "<td> 15 | 35"."</td>";
					echo "<td> 20 | 40"."</td>";
					echo "</tr>";
 					echo "</table>";
			 		
					for($i=0;$i<($ern-$srn);$i++)
					{
						 $value1[$i]=mysql_result($result1,$i,"Rollno");
						 $value2[$i]=mysql_result($result2,$i,"Rollno");
						
					}
				    echo "<br>";
	                echo "THE <b>SEAT NUMBERING</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Semester :".$sem1;
					echo "<th> Semester :".$sem2;
					echo "</tr>";
					echo "<tr>";
					echo "<td>";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					 $j=1;
	 					for($i=0;$i<20;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$j."</td>";
    						echo "<td><center>".$value1[$i]."</td>";
    						echo "</tr>";
							$j++;
							}
						 echo "</table>";
						 echo "<td>";
						 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					$k=21;
	 					for($i=0;$i<20;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$k."</td>";
    						echo "<td><center>".$value2[$i]."</td>";
    						echo "</tr>";
							$k++;
							}
							echo "</table>";
							echo "</table>";
						 break;
	
	case "3" :
//seating arrangement for three seater
					echo "THE <b>SEATING ARRANGEMENT</b> IS \n";
					echo "<table border='2' width='350' cellpadding='5'>";
					echo "<tr>";
					echo "<th> I";
					echo "<th> II";
					echo "<th> III";
					echo "<th> IV";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  1 | 21 | 41"."</td>";
					echo "<td>  6 | 26 | 46"."</td>";
					echo "<td> 11 | 31 | 51"."</td>";
					echo "<td> 16 | 36 | 56"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  2 | 22 | 42"."</td>";
					echo "<td>  7 | 27 | 47"."</td>";
					echo "<td> 12 | 32 | 52"."</td>";
					echo "<td> 17 | 37 | 57"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  3 | 23 | 43"."</td>";
					echo "<td>  8 | 28 | 48"."</td>";
					echo "<td> 13 | 33 | 53"."</td>";
					echo "<td> 18 | 38 | 58"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  4 | 24 | 44"."</td>";
					echo "<td>  9 | 29 | 49"."</td>";
					echo "<td> 14 | 34 | 54"."</td>";
					echo "<td> 19 | 39 | 59"."</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>  5 | 25 | 45"."</td>";
					echo "<td> 10 | 30 | 50"."</td>";
					echo "<td> 15 | 35 | 55"."</td>";
					echo "<td> 20 | 40 | 60"."</td>";
					echo "</tr>";
				    echo "</table>";
					
					for($i=0;$i<($ern-$srn);$i++)
					{
						 $value1[$i]=mysql_result($result1,$i,"Rollno");
						 $value2[$i]=mysql_result($result2,$i,"Rollno");
						 $value3[$i]=mysql_result($result3,$i,"Rollno");
					}
					echo "<br>";
	                echo "THE <b>SEAT NUMBERING</b> IS \n";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Semester :".$sem1;
					echo "<th> Semester :".$sem2;
					echo "<th> Semester :".$sem3;
					echo "</tr>";
					echo "<tr>";
					
					echo "<td>";
					echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					
					$j=1;
	 					for($i=0;$i<20;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$j."</td>";
    						echo "<td><center>".$value1[$i]."</td>";
    						echo "</tr>";
							$j++;
							}
						 echo "</table>";
						 echo "<td>";
						 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					$k=21;
	 					for($i=0;$i<20;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$k."</td>";
    						echo "<td><center>".$value2[$i]."</td>";
    						echo "</tr>";
							$k++;
							}
							echo "</table>";
						 echo "<td>";
						 echo "<table border='2' width='150' cellpadding='5'>";
					echo "<tr>";
					echo "<th> Seat Number";
					echo "<th> Reg Number";
					echo "</tr>";
					$l=41;
	 					for($i=0;$i<20;$i++)
						{
	
				 			echo "<tr>";
    		   				echo "<td><center>".$l."</td>";
    						echo "<td><center>".$value3[$i]."</td>";
    						echo "</tr>";
							$l++;
							}
							echo "</table>";
							echo "</table>";
						 break;
	}
	 
 }
 function connecttodb($servername,$dbname,$dbuser,$dbpassword)
	{
    	$link=mysql_connect ("$servername","$dbuser","$dbpassword",TRUE);
    	if(!$link){die("Could not connect to MySQL");}
    	mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());
    	return $link;
 	}
		echo $newline;
	echo " Exam Cell Co-ordinator";
?>
</div>  
<input type="button" onclick="printDiv('printableArea')" value="Print" />