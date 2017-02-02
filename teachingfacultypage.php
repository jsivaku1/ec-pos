<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 p {
	font-family: Verdana, Geneva, sans-serif;
}
#form1 h1 {
	color: #FF0;
}
body {
	background-color: #000;
}
#form1 p a {
	color: #FFF;
}
</style>
</head>
<?php
echo "Teaching faculty page"  ;   

        //include securedpage.php
?>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="securedpage.php">
   <p align="center">&nbsp;</p>
   <h1 align="center">WELCOME</h1>
  <p align="center"><a href="markentry.php">MARK ENTRY</a></p>
   <p align="center"><a href="markview.php">MARK VIEW</a>   </p>
    <p align="center"><a href="markreentry1.php">MARK REENTRY</a>   </p>
   <p align="center"><a href="resultanalysis.php">RESULT ANALYSIS</a></p>
   <p align="center">
     <input type="submit" name="logout" id="logout" value="logout" />
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp; </p>
</form>
</body>
</html>

