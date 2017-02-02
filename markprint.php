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
<form name="f1" method="Post" action="markprint.php">
 
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
$dep=$row1['dept'];
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


 
?>
<center>
 
  </tr>
  </td>



  
<form id="form1" name="form1" method="post" action="">
   
  <hr />
  </p>
  <p>&nbsp;</p>  
<?php
include('config.php');
//print table
$print = mysql_query("SELECT * FROM `examtable` WHERE  semester = '$sem' AND section= '$section' AND sub = '$subject'");
$result = mysql_query("SELECT * FROM `examtable` WHERE semester = '$sem' AND section= '$section' AND sub = '$subject'");
$row1 = mysql_fetch_assoc( $result );
 
     
	 
	 
	
		 	$updatestatus = " UPDATE `examtable` SET `status` = 'fail' WHERE  mark <= '49' ";
				  mysql_query( $updatestatus );
		
		
		
				
		 $updatestatus = " UPDATE `examtable` SET `status` = 'pass' WHERE mark > '49' ";
				  mysql_query( $updatestatus );
		
		
		
		
		 	$updategrade = " UPDATE `examtable` SET `grade` = 'U'  WHERE mark <= '49'";
				  mysql_query( $updategrade );
		
		
					  $updategrade = " UPDATE `examtable` SET `grade` = 'D' WHERE mark <= '59' AND mark >=50 ";
				  mysql_query( $updategrade );
		
					  $updategrade = " UPDATE `examtable` SET `grade` = 'C'  WHERE mark <= '69' AND mark >=60 ";
				  mysql_query( $updategrade );
		
					  $updategrade = " UPDATE `examtable` SET `grade` = 'B'  WHERE mark <= '79' AND mark >=70";
				  mysql_query( $updategrade );
		
							  $updategrade = " UPDATE `examtable` SET `grade` = 'A'  WHERE mark <= '89' AND mark >=80 ";
				  mysql_query( $updategrade );
		
					  $updategrade = " UPDATE `examtable` SET `grade` = 'S' WHERE mark <= '100' AND mark >=90 ";
				  mysql_query( $updategrade );
				  $retestmarkquery = "UPDATE `examtable` SET `reexam` = 'NA' WHERE mark > '49' ";
				  mysql_query( $retestmarkquery );
                     $retestattendencequery = "UPDATE `examtable` SET `reexamattendence` = 'NA' WHERE mark > '49' ";
                      mysql_query( $retestattendencequery );
					  $retestgradequery = "UPDATE `examtable` SET `reexamgrade` = 'NA' WHERE mark > '49' ";
                       mysql_query( $retestgradequery );
					 $reteststatusquery = "UPDATE `examtable` SET `reexamstatus` = 'NA' WHERE mark > '49' ";
                        mysql_query( $reteststatusquery );

		
if ( mysql_num_rows( $print ) > 0 ) {
echo '<form method="post" >';
echo '<div id=printableArea>';	
echo "<table border='1'>
<tr>
<th>REG. NO.</th>
<th>NAME</th>
<th>DEPARTMENT</th>
<th>YEAR</th>
<th>SEMESTER</th>
<th>SECTION</th>
<th>SUBJECT</th>
<th>ATTENDENCE</th>
<th>MARK</th>
<th>GRADE</th>
<th>STATUS</th>
</tr>";
    while ( $row = mysql_fetch_assoc( $print ) ) 
	{
      echo "<tr>";
  echo "<td>" . $row['regno'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
   echo "<td>" . $row['dept'] . "</td>";
 	echo "<td>" . $row['year']. "</td>";
	echo "<td>" . $row['semester'] . "</td>";
	echo "<td>" . $row['section'] . "</td>";
	echo "<td>" . $row['sub'] . "</td>";
	echo "<td>" . $row['attendence'] . "</td>";
	echo "<td>" . $row['mark'] . "</td>";
	echo "<td>" . $row1['grade'] . "</td>";
	echo "<td>" . $row1['status'] . "</td>";
  echo "</tr>";  
    }

echo "</table>";
	echo '</form>';


}
?>

</div>  
<input type="button" onclick="printDiv('printableArea')" value="Print" />