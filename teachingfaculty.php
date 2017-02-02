<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form id="form1" name="form1" method="post" action="loginproc.php">
  <div align="center">
    <h1>WELCOME</h1>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
    <form id="form1" name="form1" method="post" action="">
      <p>         <label for="username">Username </label>         <input type="text" name="username" id="username" />       
        <br>
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
      </p>
      <p>
        <input type="submit" name="login" id="login" value="Submit" />
        <label for="list"></label>
      </p>
    </form>
</body>
</html>    
<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to teaching faculty page
if (isset($_SESSION['username'])) {
header('Location: teachingfacultypage.php');
}

?>