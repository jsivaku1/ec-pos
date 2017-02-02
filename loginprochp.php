<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php

// Inialize session
session_start();

// Include database connection settings
include('config.php');

// Retrieve username and password from database according to user's input
$login = mysqli_query($link, "SELECT * FROM login WHERE (username = '" . mysqli_real_escape_string($link, $_POST['username']) . "') and (password = '" . mysqli_real_escape_string($link,$_POST['password']) . "')");

// Check username and password match
if (mysqli_num_rows($login) != NULL) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
// Jump to teaching faculty page
include('hppage.php');
}
else {
// Jump to login page
include('index.php');
}

?>
