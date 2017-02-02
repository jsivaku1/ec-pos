<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

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
	font-size: 15px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<form name="f1" method="Post" action="reentry1.php">
<table border="0" width="100%" height="500">
<tr>
<td align="center" height="100">
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
if(isset($_POST['submit']))
{
include('config.php');
$regno=mysql_query("SELECT `regno` FROM `examtable`;");
if ( isset( $_POST["submit"] ) ) {
    if ( isset( $_POST["delete"] ) ) {
        $list = implode( "," , $_POST["delete"] );
        $sql = " delete  from examtable WHERE regno IN ($list)";
        mysql_query( $sql ) or die( mysql_error() );
    }
if (is_array(@$_POST["regno"])) {

    foreach( @$_POST["regno"] as $regno ) 
	{
        $mark = mysql_real_escape_string( @$_POST["mark"][$regno] );
		$atten = mysql_real_escape_string( @$_POST["attendence"][$regno] );
         $update = " UPDATE `examtable` SET `mark` = '$mark'  WHERE
				  `regno` =$regno LIMIT 1 ; ";
		$updateatten = " UPDATE `examtable` SET `attendence` = '$atten'  WHERE
				  `regno` =$regno LIMIT 1 ; ";
        mysql_query( $update );
		mysql_query( $updateatten );
		
    }
	if(mysql_query($update))
		{
			echo "UPDATE SUCCESSFULL";
		    echo "<br/>";
			echo "<br/>";
			echo '<a href="markprint.php">click to view the updated table </a>';
		}
		else
		{
			echo mysql_error();
		}
		
 }
 }}
?>
 </td>
 </tr>
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



$sql = "select regno,name,sub,dept FROM examtable where semester='$sem' and section ='$section' and sub='$subject' ";
$res = mysql_query( $sql ) or die( mysql_error() );
$sqlname= " select regno,name,sub,dept FROM examtable where semester='$sem' and section ='$section' and sub ='$subject'  ";
$resname = mysql_query( $sqlname ) or die( mysql_error() );
$rowname = mysql_fetch_assoc( $resname );

if ( mysql_num_rows( $res ) > 0 ) 

{
?>
<center>
 
  </tr>
  </td>
<tr>
<td height="300px">
<font color="#0066FF"><center><h3> Student Mark List</h3></center></font>
<form name="" method="post">
<center>
<table border="1">

<tr bgcolor="#000000" height="35"><th class="style1">RegNo</th><th class="style1">Name</th><th class="style1">Department</th><th class="style1">Subject</th><th class="style1">Mark</th><th class="style1">Attendance</th><th class="style1">Delete</th></tr>
    <?php
	
    while ( $row = mysql_fetch_assoc( $res ) )
	 {
		 
		
	 
		echo '<tr>';
        echo '<td>' . $row["regno"] . '</td>';
		echo '<td>' . $row["name"] . '</td>';
		echo '<td>' . $row["dept"] . '</td>';
		echo '<td>' . $row["sub"] . '</td>';
        echo '<td>'.'<input type="text" name="mark[' . @$row["regno"] . ']" value="' . @$row["mark"] . '">'.'</td>';
		echo '<td>'.'<input type="text" name="attendence[' . @$row["regno"] . ']" value="' . @$row["attendence"] .'">'. '</td>';
        echo '<input type="hidden" name="regno[]" value="' . @$row["regno"] . '">  ' . "\n";
        echo '<td>'.'<input type="checkbox" name="delete[]" value="' . @$row["regno"] . '">  ' . "Delete".'</td>';
		echo '</tr>';	
	 
		  
         
    }
	
   
 }
   
}
?>

</table>
</center>
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="Update">
</form>
</td>
</tr>

</table>
</center>
 		
		
</body>
</html>
