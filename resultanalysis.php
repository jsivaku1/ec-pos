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


</head>

<body>
<form name="f1" method="Post" action="resultanalysis.php">
<table width="100%">
 <tr>
<td align="right"><a href="teachingfacultypage.php">BACK</a>
</td>
</tr>
<tr>
<td align="center"><b><font color="#0033CC" size="4" face="Arial, Helvetica, sans-serif">INTERNAL EXAMINATION RESULT ANALYSIS  </b></font>
</td>
</tr>
<tr>
<td height="150px">
 <div>
		<label>Year <span style="color:#FF0000">*</span></label>
		 <div  >
		 
		<select name="year" onChange="getyear(this.value)" style="width:210px;">
	<option value="">Select Year</option>
	 	 <?php
		 include("config.php");


			  $q5=mysql_query("select * from year");
				while($r=mysql_fetch_assoc($q5))

			{
							?>
<option value=<?php echo $r['yearid']?>><?php  echo $r['year']?></option>
 								<?php
								
								}
													
								  ?>
        </select>
		</div>
  </div>
		<div>
		<label>Dept <span style="color:#FF0000">*</span></label>
		 <div id="deptdiv">
		 <select name="dept" style='width:210px;'>
	    <option>Select Year First</option>
        </select>
		 </div>
  </div>
		 <div>
		<label>Semester <span style="color:#FF0000">*</span></label>
		<div id="semesdiv">
		<select name="semes" style='width:210px;'>
	    <option>Select Dept First</option>
        </select>
		 
		</div>
		</div>
		
		<div>
		<label>Subject <span style="color:#FF0000">*</span></label>
		<div id="subjectdiv" >
		<select name="subject" style='width:210px;'>
	    <option>Select Semester First</option>
        </select>
		
		</div>
		</div>
		<div>
		<label>Class <span style="color:#FF0000">*</span></label>
		<div id="subjectdiv" >
		<select name="class" style='width:210px;'>
		<option>Select Class First</option>
	    <option>A</option>
	    <option>B</option>
		 
        </select>
		
		</div>
		</div>
		<br />
		  <input type="submit" name="submit1" id="submit1" value="Submit" /></form>
		  </td>
		  </tr>
		  
  
 <tr>
 <td>
  <?php
if(isset($_POST['submit1']))
{
$year=$_POST["year"];
$dept=$_POST["dept"];
$sem=$_POST["semes"];
$subject=$_POST["subject"];
$section=$_POST["class"];

//echo "<br>";

$x=$_POST["year"];	   
$result1 = mysql_query("SELECT * FROM year where yearid='$x' ");
$row1= mysql_fetch_array($result1);
$year=$row1['year'];
//echo "<br>";


$y=$_POST["dept"];	   
$result1 = mysql_query("SELECT * FROM dept where deptid='$y' ");
$row1= mysql_fetch_array($result1);
$dept=$row1['dept'];
//echo "<br>";


$z=$_POST["semes"];	   
$result1 = mysql_query("SELECT * FROM semes where id='$z' ");
$row1= mysql_fetch_array($result1);
$sem=$row1['semes'];

//echo "<br>";

$w=$_POST["subject"];	   
$result1 = mysql_query("SELECT * FROM subject where id='$w' ");
$row1= mysql_fetch_array($result1);
$subject=$row1['subject'];

//echo "<br>";
 }
//$print = mysql_query("SELECT * FROM `examtable` WHERE  semester = '$sem' AND section= '$section' AND sub = '$subject'");

//$result = mysql_query("SELECT * from  `examtable` WHERE semester = '$sem' AND section= '$section' AND sub = '$subject'");

//$result1 = mysql_query("SELECT * FROM `examtable` WHERE semester = '$sem' AND section= '$section' AND sub = '$subject'");

//$row1 = mysql_fetch_assoc($result);
//$row2 = mysql_fetch_assoc($result1);

?>
<form id="form1" name="form1" method="post" action="">
   
  <hr />
  
   
  <div id=printableArea>
<?php

include('config.php');

$strengthquery= mysql_query("SELECT COUNT(regno) FROM examtable WHERE year = '$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND sub='$subject'");
@$strength=mysql_result($strengthquery,0);
   

$appearedquery = mysql_query("SELECT COUNT(regno) FROM examtable WHERE year = '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND attendence = 'p' AND attendence = 'P' AND sub='$subject'");
@$appeared = mysql_result($appearedquery,0);

$absentquery = mysql_query("SELECT COUNT(regno) FROM examtable WHERE year = '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND attendence = 'ab' AND attendence = 'AB' AND sub='$subject'");
@$absent = mysql_result($absentquery,0);

$passquery = mysql_query("SELECT COUNT(regno) FROM examtable WHERE year= '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND mark  >= '49' AND sub='$subject'");
@$pass = mysql_result($passquery,0);

@$passpercentage = ($pass/$appeared)*100;

$failquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year= '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND status = 'fail' ANd status = 'FAIL' AND sub='$subject'");
@$fail=mysql_result($failquery,0);

$dquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year = '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND grade = 'D' AND grade = 'd' AND sub='$subject'");
@$d=mysql_result($dquery,0);

$cquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year= '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND grade = 'C' AND grade = 'c'");
@$c=mysql_result($cquery,0);

$bquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year= '$year' AND semester = '$sem' AND dept = '$dept' AND section ='$section' AND grade = 'B' AND grade = 'b' AND sub='$subject'");
@$b=mysql_result($bquery,0);

$aquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND grade = 'A' AND grade = 'a' AND sub='$subject'");
@$a=mysql_result($aquery,0);

$squery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND grade = 'S' AND grade = 's' AND sub='$subject'");
@$s=mysql_result($squery,0);



//retest query
$dretestquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexamgrade = 'D' AND reexamgrade = 'd' AND sub='$subject'");
@$dretest=mysql_result($dretestquery,0);

$cretestquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexamgrade = 'C' AND reexamgrade = 'c' AND sub='$subject'");
@$cretest=mysql_result($cretestquery,0);

$bretestquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexamgrade = 'B' AND reexamgrade = 'b' AND sub='$subject'");
@$bretest=mysql_result($bretestquery,0);

$aretestquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexamgrade = 'A' AND reexamgrade = 'a' AND sub='$subject'");
@$aretest=mysql_result($aretestquery,0);

$sretestquery=mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexamgrade = 'S' AND reexamgrade = 's' AND sub='$subject'");
@$sretest=mysql_result($sretestquery,0);

$retestpassquery = mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexam  >= '49' AND sub='$subject'");
@$retestpass = mysql_result($retestpassquery,0);
@$retestpasspercentage=($retestpass/$appeared)*100;

$retestappearedquery = mysql_query("SELECT COUNT(regno) FROM examtable WHERE year='$year' AND semester ='$sem' AND dept = '$dept' AND section ='$section' AND reexamattendence = 'p' AND reexamattendence = 'P' AND sub='$subject'");
@$retestappeared = mysql_result($retestappearedquery,0);
$netpass = $passpercentage + $retestpasspercentage;

if(isset($_POST['submit1']))
{
	
echo '<style type="text/css">
.color {
	color: #00F;
}
normal {
	color: #000;
}
normal {
	color: #000;
}
#form1 div {
	color: #000;
}
</style>';
echo '<div align="center">
<form action="" method="post" name="form1" class="color" id="form1">
<h1>INTERNAL EXAMINATION RESULT ANALYSIS 
  </h1>
    <div align="left">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CLASS STRENGTH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
	  
 
	 
	 echo $strength;
	  
	  
	  echo' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE OF TEST : </p>
  <p>YEAR :'.$year.' <br>
  SEMESTER: '.$sem.' <br>
  DEPT:  '.$dept.' <br>
  SUBJECT:'.$subject.'<br>
      <ol>
        <li>NUMBER OF STUDENTS APPEARED :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$appeared.'</li>
        <li>NUMBER OF STUDENTS ABSENT :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$absent.'</li>
        <li>NUMBER OF STUDENTS PASSED :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$pass.'</li>
        <li>PASS PERCENTAGE :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$passpercentage.'</li>
        <li>NUMBER OF STUDENTS APPEARED FOR RE-EXAMINATION :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$retestappeared.'</li>
        <li>PASS PERCENTAGE AFTER RE-EXAM :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.$netpass.'</li>
      </ol>
      <p>&nbsp;</p>
      <h3 align="center">RESULT ANALYSIS</h3>
      <p align="center">Passing Minimum : 50 Marks</p>
      <table width="1009" height="50" border="1">
        <tr>
          <td>&nbsp;</td>
          <td><p>BELOW 49</p>
          <p>Fail</p></td>
          <td><p>50 TO 59</p>
          <p>D</p></td>
          <td><p>60 TO 69</p>
          <p>C</p></td>
          <td><p>70 TO 79</p>
          <p>B</p></td>
          <td><p>80 TO 89</p>
          <p>A</p></td>
          <td><p>90 TO 100</p>
          <p>S</p></td>
          <td>TOTAL STUDENT APPEARED</td>
        </tr>
        <tr>
          <td>TEST-1</td>';
          echo '<td>&nbsp;'.$fail.'</td>
          <td>&nbsp;'.$d.'</td>
          <td>&nbsp;'.$c.'</td>
          <td>&nbsp;'.$b.'</td>
          <td>&nbsp;'.$a.'</td>
          <td>&nbsp;'.$s.'</td>
          <td>&nbsp;'.$appeared.'</td>
        </tr>
        <tr>
          <td>RETEST-1</td>
          <td>&nbsp;'."-".'</td>
          <td>&nbsp;'.$dretest.'</td>
          <td>&nbsp;'.$cretest.'</td>
          <td>&nbsp;'.$bretest.'</td>
          <td>&nbsp;'.$aretest.'</td>
          <td>&nbsp;'.$sretest.'</td>
          <td>&nbsp;'.$retestappeared.'</td>
        </tr>
      </table>
      <p align="right">&nbsp;</p>
      <p align="right">&nbsp;</p>
      <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FACULTY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp HOD </p>
   
      <p align="center">&nbsp;</p>
    </div>
  </form>
</div>';
}
?>
</div>  
<input type="button" onclick="printDiv('printableArea')" value="Print" />
</body>
</html>