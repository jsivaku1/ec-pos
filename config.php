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
ini_set('display_errors', true);
$user = 'root';
$password = 'root';
$db = 'exam';
$host = 'localhost';
$port = 8889;

$link = mysqli_connect(
   "$host:$port",
   $user,
   $password
);

if (!$link)
{
    die('Not connected : ' . mysqli_error());
}

$db_selected = mysqli_select_db($link,$db);


if (!$db_selected) {

    die ('Cant use exam : ' . mysqli_error());
}

?>
