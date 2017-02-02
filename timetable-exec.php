<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Timetable Generation</title>
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
echo'<header>

<img src="circular.jpg" />
</header>';

//DB Connection params -- edit these accordingly
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'exam');

	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) 
	{
		die('Failed to connect to serve: ' . mysql_error());
    } 
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
//to get input from ui
$newline = "<br /><br />";
$sem1=clean($_POST['semtype1']);
$sem2=clean($_POST['semtype2']);
$sem3=clean($_POST['semtype3']);
$sem4=clean($_POST['semtype4']);
$date=clean($_POST['sda']);
$exam=clean($_POST['examtype']);	
$da=date_create($date);
$da1=date_create($date);
$da2=date_create($date);
$da3=date_create($date);
$da4=date_create($date);
$da5=date_create($date);
date_modify($da1, '+1 day');
date_modify($da2, '+2 day');
date_modify($da3, '+3 day');
date_modify($da4, '+4 day');
date_modify($da5, '+5 day');
//to get values from db
switch ($sem1)
	{
		case "1": 
		{
	      $qry1 = "SELECT sub FROM sem1";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "2":
		{
	      $qry1 = "SELECT sub FROM sem2";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "3":
		{
	      $qry1 = "SELECT sub FROM sem3";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "4": 
		{
	      $qry1 = "SELECT sub FROM sem4";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "5": 
		{
	      $qry1 = "SELECT sub FROM sem5";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "6": 
		{
	      $qry1 = "SELECT sub FROM sem6";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "7": 
		{
	      $qry1 = "SELECT sub FROM sem7";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
		case "8": 
		{
	      $qry1 = "SELECT sub FROM sem8";
	      $result1 = @mysql_query($qry1);
		  $row1= mysql_fetch_array($result1) or die(mysql_error());
		  break;
		}
	
	}
	switch ($sem2)
	{
		case "1": 
		{
	      $qry2 = "SELECT sub FROM sem1";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "2":
		{
	      $qry2 = "SELECT sub FROM sem2";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "3":
		{
	      $qry2 = "SELECT sub FROM sem3";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "4": 
		{
	      $qry2 = "SELECT sub FROM sem4";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "5": 
		{
	      $qry2 = "SELECT sub FROM sem5";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "6": 
		{
	      $qry2 = "SELECT sub FROM sem6";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "7": 
		{
	      $qry2 = "SELECT sub FROM sem7";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
		case "8": 
		{
	      $qry2 = "SELECT sub FROM sem8";
	      $result2 = @mysql_query($qry2);
		  $row2= mysql_fetch_array($result2) or die(mysql_error());
		  break;
		}
	
	}
	switch ($sem3)
	{
		case "1": 
		{
	      $qry3 = "SELECT sub FROM sem1";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "2":
		{
	      $qry3 = "SELECT sub FROM sem2";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "3":
		{
	      $qry3 = "SELECT sub FROM sem3";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "4": 
		{
	      $qry3 = "SELECT sub FROM sem4";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "5": 
		{
	      $qry3 = "SELECT sub FROM sem5";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "6": 
		{
	      $qry3 = "SELECT sub FROM sem6";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "7": 
		{
	      $qry3 = "SELECT sub FROM sem7";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
		case "8": 
		{
	      $qry3 = "SELECT sub FROM sem8";
	      $result3 = @mysql_query($qry3);
		  $row3= mysql_fetch_array($result3) or die(mysql_error());
		  break;
		}
	
	}
	switch ($sem4)
	{
		case "1": 
		{
	      $qry4 = "SELECT sub FROM sem1";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "2":
		{
	      $qry4 = "SELECT sub FROM sem2";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "3":
		{
	      $qry4 = "SELECT sub FROM sem3";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "4": 
		{
	      $qry4 = "SELECT sub FROM sem4";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "5": 
		{
	      $qry4 = "SELECT sub FROM sem5";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "6": 
		{
	      $qry4 = "SELECT sub FROM sem6";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "7": 
		{
	      $qry4 = "SELECT sub FROM sem7";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
		case "8": 
		{
	      $qry4 = "SELECT sub FROM sem8";
	      $result4 = @mysql_query($qry4);
		  $row4= mysql_fetch_array($result4) or die(mysql_error());
		  break;
		}
	
	}
	for($i=0;$i<6;$i++)
  	{
		 $value1[]=mysql_result($result1,$i,"sub");
		 $value2[]=mysql_result($result2,$i,"sub");
		 $value3[]=mysql_result($result3,$i,"sub");
		 $value4[]=mysql_result($result4,$i,"sub");
	}
echo "THE <b>TIME TABLE</b> IS \n";
	echo "<table border='2' width='850' cellpadding='15'>";
	echo "<tr>";
	echo "<th> Semester";
    echo "<th> ".date_format($da, 'd-m-Y')."</th>";
    echo "<th> ".date_format($da1, 'd-m-Y')."</th>";
    echo "<th> ".date_format($da2, 'd-m-Y')."</th>";
	echo "<th> ".date_format($da3, 'd-m-Y')."</th>";
	echo "<th> ".date_format($da4, 'd-m-Y')."</th>";
	echo "<th> ".date_format($da5, 'd-m-Y')."</th>";
    echo "</tr>";
	echo "<tr>";
	    echo "<td>".$sem1."</td>";
       	echo "<td>".$value1[0]."</td>";
    	echo "<td>".$value1[1]."</td>";
    	echo "<td>".$value1[2]."</td>";
		echo "<td>".$value1[3]."</td>";
		echo "<td>".$value1[4]."</td>";
		echo "<td>".$value1[5]."</td>";
    echo "</tr>";
	echo "<tr>";
	    echo "<td>".$sem2."</td>";
       	echo "<td>".$value2[0]."</td>";
    	echo "<td>".$value2[1]."</td>";
    	echo "<td>".$value2[2]."</td>";
		echo "<td>".$value2[3]."</td>";
		echo "<td>".$value2[4]."</td>";
		echo "<td>".$value2[5]."</td>";
    echo "</tr>";
	echo "<tr>";
	    echo "<td>".$sem3."</td>";
       	echo "<td>".$value3[0]."</td>";
    	echo "<td>".$value3[1]."</td>";
    	echo "<td>".$value3[2]."</td>";
		echo "<td>".$value3[3]."</td>";
		echo "<td>".$value3[4]."</td>";
		echo "<td>".$value3[5]."</td>";
    echo "</tr>";
	echo "<tr>";
	    echo "<td>".$sem4."</td>";
       	echo "<td>".$value4[0]."</td>";
    	echo "<td>".$value4[1]."</td>";
    	echo "<td>".$value4[2]."</td>";
		echo "<td>".$value4[3]."</td>";
		echo "<td>".$value4[4]."</td>";
		echo "<td>".$value4[5]."</td>";
    echo "</tr>";
	echo "</table>";
	
 echo $newline;
 echo "Exam cell Coordinator";
echo $newline;
 
?>
</div>  
<input type="button" onclick="printDiv('printableArea')" value="Print" />