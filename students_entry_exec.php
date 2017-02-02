<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students details entry</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="students_entry.php">
</form>
</body>
</html>
<?php
include('students_entry.php');
//DB Connection params -- edit these accordingly
	define('DB_HOST', 'localhost');
    define('DB_USER', 'user');
    define('DB_PASSWORD', 'pass');
    define('DB_DATABASE', 'exam');

	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	

	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
//$total=clean($_POST['totstu']);
  //   echo $total;
//for($i=0;$i<$total;$i++)
//{	 
  $s=clean($_POST['sem']);
  $r=clean($_POST['rno']);
    // echo $rno;
 
  $n=clean($_POST['name']);
  //   echo $name;
//}
	 //Create INSERT query
//for ($i=0;$i<$total;$i++) 
//{switch ($destination){  case "Las Vegas":   echo "Bring an extra $500";   break;   

	switch ($s)
	{
		case "1": case "2":
		{
	      $qry = "INSERT INTO y1(Rollno, Name) VALUES('$r','$n')";
	      $result = @mysql_query($qry);
		  break;
		}
		case "3": case "4":
		{
	      $qry = "INSERT INTO y2(Rollno, Name) VALUES('$r','$n')";
	      $result = @mysql_query($qry);
		  break;
		}
		case "5": case "6":
		{
	      $qry = "INSERT INTO y3(Rollno, Name) VALUES('$r','$n')";
	      $result = @mysql_query($qry);
		  break;
		}
		case "7": case "8":
		{
	      $qry = "INSERT INTO y4(Rollno, Name) VALUES('$r','$n')";
	      $result = @mysql_query($qry);
		  break;
		}
	}
//}	

	//Check whether the query was successful or not
	if($result) {
	echo "Inserted successfully";
		//header("location: ereg-success.php");
		exit();
	}else {
		die("Query failed". mysql_error());
	}

?>