<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students detail entry</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="students_entry_exec.php">
  <p>&nbsp;</p>
  <h1>Sutdents Details Entry Form</h1>
  <p>
    <label for="sem">Semester : </label>
    <input type="text" name="sem" id="txt3" />
  </p>
  
  <p>
    <label for='Rno'>Roll Number : </label>
    <input type='text' name='rno' id='txt1' />
  </p>
  <p>
    <label for='name'>Name :</label>
    <input type='text' name='name' id='txt2' />
  </p>
    
  <p>
     <input type="submit" name="Add" id="Add" value="Add" />
  </p>

  <p>&nbsp;</p>
</form>
</body>
</html>
<?php //include('students_entry_exec.php');
?>



