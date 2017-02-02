<?php
		 include("config.php");
		 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<SCRIPT language=JavaScript>


function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
<script language="javascript" type="text/javascript">
 function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getyear(yearId) {		
		
		var strURL="finddept.php?year="+yearId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('deptdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getsemes(yearId,deptId) {		
		var strURL="findsem.php?year="+yearId+"&dept="+deptId;
		 
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('semesdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	function getsubject(dept,semes) {		
		var strURL="findsubject.php?dept="+dept+"&semes="+semes;
		 
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('subjectdiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	 
	
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
-->
</style>

</head>
<body>
<form name="f1" method="Post" action="studentmarkview.php">
 <table width="100%">
 <tr>
<td align="right"><a href="hppage.php">BACK</a>
</td>
</tr>
<tr>
<td align="center"><b><font color="#0033CC" size="4" face="Arial, Helvetica, sans-serif">Student Mark View </b></font>
</td>
</tr>
<tr>
<td>
<center>
<table width="30%" border="0">
  <tr>
    <td>Enter The Student Reg no</td>
    <td> <input name="reg" type="text" id="reg" /></td></tr>
	<tr>
	<td colspan="2">
   
	 	 <center><input type="submit" name="submit1" id="submit1" value="Submit" /></form> </center>
		  </td>
  </tr>
</table>
</center>

</td>
</tr>
</table> 
		  
  
  
<?php
if(isset($_POST['submit1']))
{
$reg=$_POST["reg"];
 
 }
 

?>
<center>
 
  
<form id="form1" name="form1" method="post" action="">
  
  <hr />
  
<div id='printableArea'><br />
<?php

 
$print = mysql_query("SELECT * FROM `examtable` WHERE regno='$reg'");

 
?>
<center><h3>Student Information</h3></center>
<table border="1">

<tr bgcolor="#000000" height="35"><th class="style1">REG. NO.</th><th class="style1">Name</th><th class="style1">Year</th><th class="style1">Semester</th><th class="style1">Department</th><th class="style1">SECTION</th><th class="style1">SUBJECT</th>
<th class="style1">ATTENDENCE</th>
<th class="style1">MARK</th>
<th class="style1">GRADE</th>
<th class="style1">STATUS</th>
</tr>

 
  <?php
if(mysql_num_rows($print)>0) 
{
 
while ( $row = mysql_fetch_assoc( $print ) ) 
{	
	
	echo '<tr>';
        echo '<td>' .$row['regno'] . '</td>';
		echo '<td>' . $row["name"] . '</td>';
		echo '<td>' . $row['year'] . '</td>';
		echo '<td>' . $row['semester']  . '</td>';
		echo '<td>' .  $row['dept']  . '</td>';
		echo '<td>' . $row['section'] . '</td>';
		echo '<td>' . $row['sub']  . '</td>';
		echo '<td>' . $row['attendence']  . '</td>';
		echo '<td>' . $row['mark']   . '</td>';
		echo '<td>' . $row['grade']  . '</td>';
		echo '<td>' . $row['status']  . '</td>';
		//echo '<td>' . $row['reexamattendence']  . '</td>';
		//echo '<td>' . $row['reexam']  . '</td>';
		//echo '<td>' . $row['reexamgrade']  . '</td>';
		//echo '<td>' . $row['reexamstatus'] . '</td>';	 
		echo '</tr>';	
	 

}
}
?>
</table>
</div>
  </p>
  <p>
    <input type="button" onclick="printDiv('printableArea')" value="Print" />
  </p>
</body>
</html>