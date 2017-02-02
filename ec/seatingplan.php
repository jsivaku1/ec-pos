<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<?php
include('config.php');
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	


$query1="SELECT Rollno FROM year1";
$result1=mysql_query($query1) or die(mysql_error());
$row1= mysql_fetch_array($result1) or die(mysql_error());
$query2="SELECT Rollno FROM year2";
$result2=mysql_query($query2) or die(mysql_error());
$row2= mysql_fetch_array($result2) or die(mysql_error());
$num2=mysql_query("SELECT COUNT(Rollno) FROM year2");
$num1=mysql_query("SELECT COUNT(Rollno) FROM year1");
echo "Room-1 \n";
echo "<table border='2'>";
 for($i=0;$i<10;$i++)
 {

	 $value1=mysql_result($result1,$i,"Rollno");
	 $value2=mysql_result($result2,$i,"Rollno");
	
	echo "<tr><td>".$value1."</td><td>".$value2."</td></tr>";
	
	}
echo "</table>";
echo "Room-2 \n";
echo "<table border='2'>";
 for($i=10;$i<20;$i++)
 {

	 $value1=mysql_result($result1,$i,"Rollno");
	 $value2=mysql_result($result2,$i,"Rollno");
	
	echo "<tr><td>".$value1."</td><td>".$value2."</td></tr>";
	
	}
echo "</table>";
	

?>
</p>
<p>&nbsp;</p>
</body>
</html>

	