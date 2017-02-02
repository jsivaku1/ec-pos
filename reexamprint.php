<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.year.options[form.year.options.selectedIndex].value; 
self.location='reexamprint.php?year=' + val ;
}
function reload2(form)
{
var val=form.year.options[form.year.options.selectedIndex].value; 
var val2=form.semester.options[form.semester.options.selectedIndex].value; 

self.location='reexamprint.php?year=' + val + '&semester=' + val2 ;
}
function reload5(form)
{
var val=form.semester.options[form.semester.options.selectedIndex].value; 
var val5=form.dept.options[form.dept.options.selectedIndex].value; 

self.location='reexamprint.php?semester=' + val + '&dept=' + val2 ;
}
function reload3(form)
{

var val3=document.form.subject.options[document.form.subject.selectedIndex].text;

self.location='reexamprint.php?subject=' + val3 ;
}
function reload4(form)
{

var val4=document.form.section.options[document.form.section.selectedIndex].text;
self.location='reexamprint.php?section=' + val4 ;
}
function reload6(form)
{

var val6=document.form.section.options[document.form.section.selectedIndex].text;

self.location='reexamprint.php?section=' + val3 ;
}


function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
</head>
<body>
<?php

include('config.php');
///////// Getting the data from Mysql table for first list box//////////
$quer2=mysql_query("SELECT DISTINCT year FROM examtable order by year");
///////////// End of query for first list box////////////

/////// for second drop down list we will check if category is selected else we will display all the subcategory///// 
@$year=$_GET["year"]; // This line is added to take care if your global variable is off
if(isset($year) and strlen($year) > 0)
{
$quer=mysql_query("SELECT DISTINCT semester FROM examtable where year=$year order by semester");
}
else
{
$quer=mysql_query("SELECT DISTINCT semester FROM examtable order by semester"); 
}
////////// end of query for second subcategory drop down list box ///////////////////////////


/////// for Third drop down list we will check if sub category is selected else we will display all the subcategory3///// 
@$semester=$_GET["semester"]; // This line is added to take care if your global variable is off
//echo $semester;
if(isset($semester) and strlen($semester) > 0)
{
$quer3=mysql_query("SELECT DISTINCT sub FROM examtable where semester=$semester order by sub"); 
}else{$quer3=mysql_query("SELECT DISTINCT sub FROM examtable order by sub"); } 
////////// end of query for third subcategory drop down list box ///////////////////////////


echo "<form method=post name=f1 action=''>";
//////////        Starting of first drop downlist /////////
echo "<select name='year' onchange=\"reload(this.form)\"><option value=''>Select year</option>";
while($noticia2 = mysql_fetch_array($quer2)) { 
if($noticia2['year']==@$year){echo "<option selected value='$noticia2[year]'>$noticia2[year]</option>"."<BR>";}
else{echo  "<option value='$noticia2[year]'>$noticia2[year]</option>";}
}
echo "</select>";
echo "<br/>";
echo "<br/>";
//////////////////  This will end the first drop down list ///////////

//////////        Starting of second drop downlist /////////
echo "<select name='semester' onchange=\"reload2(this.form)\"><option value=''>Select semester</option>";
while($noticia = mysql_fetch_array($quer)) { 
if($noticia['semester']==@$semester){echo "<option value='$noticia[semester]'>$noticia[semester]</option>"."<BR>";}
else{echo  "<option value='$noticia[semester]'>$noticia[semester]</option>";}
}
echo "</select>";
echo "<br/>";
echo "<br/>";
//////////////////  This will end the second drop down list ///////////

//starting of third drop down box
@$dept=$_POST["dept"];
if(isset($year) and strlen($year) > 0)
{
$quer5=mysql_query("SELECT DISTINCT dept FROM examtable where year=$year order by semester");
}
else
{
$quer5=mysql_query("SELECT DISTINCT dept FROM examtable order by semester"); 
}
echo "<select name='dept' onchange=\"reload5(this.form)\"><option value=''>Select dept</option>";
while($noticia5 = mysql_fetch_array($quer5)) 
{
	 { 
if($noticia5['dept']==@$dept){echo "<option value='$noticia5[dept]'>$noticia5[dept]</option>"."<BR>";}
else{echo  "<option value='$noticia5[dept]'>$noticia5[dept]</option>";}
}
}
echo "</select>";
echo "<br/>";
echo "<br/>";

//end of third drop down box

//////////        Starting of third drop downlist /////////
echo "<select name='subject' id='subject' onchange=\"reload4(this.form)\"><option value=''>Select subject</option>";
while($noticia = mysql_fetch_array($quer3)) { 
echo  "<option value='$noticia[sub]'>$noticia[sub]</option>";
}
echo "</select>";
echo "<br/>";
echo "<br/>";
//////////////////  This will end the third drop down list ///////////

@$subject=$_POST["subject"]; 
//echo $subject;
//fourth list box


if(isset($semester) and strlen($semester) > 0)
{
$quer4=mysql_query("SELECT DISTINCT section FROM examtable where semester = $semester order by section"); 
}else{$quer4=mysql_query("SELECT DISTINCT section FROM examtable order by section"); } 
echo "<select name='section' id='section' onchange=\"reload6(this.form)\"><option value=''>Select section</option>";
while($noticia2 = mysql_fetch_array($quer4)) { 
if($noticia2['semester']==@$semester){echo "<option value='$noticia2[section]'>$noticia2[section]</option>"."<BR>";}
else{echo  "<option value='$noticia2[section]'>$noticia2[section]</option>";}
}
echo "</select>";
echo "<br/>";
echo "<br/>";


@$section=$_POST["section"]; 
//echo $section;
//fourth list box
?>

  
<form id="form1" name="form1" method="post" action="">
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" />
  <hr />
  </p>
  <p>&nbsp;</p>  
<?php
include('config.php');
//print table
$print = mysql_query("SELECT `regno`, `name` , `dept`,`year`,`semester`, `section`, `sub`, `reexam` FROM `examtable` WHERE  semester = '$semester' AND section= '$section' AND sub = '$subject' ");
$result = mysql_query("SELECT `reexamgrade`, `reexamstatus`, `reexamattendence` FROM `examtable` WHERE semester = '$semester' AND section= '$section' AND sub = '$subject'");
$row1 = mysql_fetch_assoc( $result );
//$regno=mysql_query("SELECT `regno` FROM `examtable`;");
//$mark = mysql_query("SELECT 'regno' ,`mark' FROM `examtable` WHERE semester = '$semester' AND section= '$section' AND sub = '$subject'");
     
	 
	 
	
		 	$updatestatus = " UPDATE `examtable` SET `reexamstatus` = 'fail' WHERE  'reexam' <= '49' ";
				  mysql_query( $updatestatus );
		
		
		
				
		 $updatestatus = " UPDATE `examtable` SET `reexamstatus` = 'pass' WHERE 'reexam' > '49' ";
				  mysql_query( $updatestatus );
		
		
		
		
		 	$updategrade = " UPDATE `examtable` SET `reexamgrade` = 'U'  WHERE 'reexam' <= '49'";
				  mysql_query( $updategrade );
		
		
					  $updategrade = " UPDATE `examtable` SET `reexamgrade` = 'D' WHERE 'reexam' <= '59' AND 'reexam' >= '50' ";
				  mysql_query( $updategrade );
		
					  $updategrade = " UPDATE `examtable` SET `reexamgrade` = 'C'  WHERE 'reexam' <= '69' AND 'reexam' >= '60' ";
				  mysql_query( $updategrade );
		
					  $updategrade = " UPDATE `examtable` SET `reexamgrade` = 'B'  WHERE reexam <= '79' AND reexam' >= '70'";
				  mysql_query( $updategrade );
		
				$updategrade = " UPDATE `examtable` SET `reexamgrade` = 'A'  WHERE 'reexam' <= '89' AND reexam >= '80' ";
				  mysql_query( $updategrade );
		
					  $updategrade = " UPDATE `examtable` SET `reexamgrade` = 'S' WHERE reexam <= '100' AND reexam >=90 ";
				  mysql_query( $updategrade );
		
if ( mysql_num_rows($print) > 0 ) {
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
<th>RE-EXAM ATTENDENCE</th>
<th>RE-EXAM MARK</th>
<th>RE-EXAM GRADE</th>
<th>RE-EXAM STATUS</th>
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
	echo "<td>" . $row1['reexamattendence'] . "</td>";
	echo "<td>" . $row['reexam'] . "</td>";
	echo "<td>" . $row1['reexamgrade'] . "</td>";
	echo "<td>" . $row1['reexamstatus'] . "</td>";
  echo "</tr>";  
    }

echo "</table>";
	echo '</form>';


}
?>

</div>  
<input type="button" onclick="printDiv('printableArea')" value="Print" />