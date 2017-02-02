<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.year.options[form.year.options.selectedIndex].value; 
self.location='markentry.php?year=' + val ;
}
function reload2(form)
{
var val=form.year.options[form.year.options.selectedIndex].value; 
var val2=form.semester.options[form.semester.options.selectedIndex].value; 

self.location='markentry.php?year=' + val + '&semester=' + val2 ;
}
function reload5(form)
{
var val=form.semester.options[form.semester.options.selectedIndex].value; 
var val5=form.dept.options[form.dept.options.selectedIndex].value; 

self.location='markentry.php?semester=' + val + '&dept=' + val2 ;
}
function reload3(form)
{

var val3=document.form.subject.options[document.form.subject.selectedIndex].text;

self.location='markentry.php?subject=' + val3 ;
}
function reload4(form)
{

var val4=document.form.section.options[document.form.section.selectedIndex].text;
self.location='markentry.php?section=' + val4 ;
}
function reload6(form)
{

var val6=document.form.section.options[document.form.section.selectedIndex].text;

self.location='markentry.php?section=' + val3 ;
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
if(isset($semester) and strlen($semester) > 0)
{
$quer3=mysql_query("SELECT DISTINCT sub FROM examtable where dept=$dept order by sub"); 
}else{$quer3=mysql_query("SELECT DISTINCT sub FROM examtable order by sub"); } 
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
}

$sql = " select regno FROM examtable WHERE semester = '$semester' AND section ='$section' AND sub ='$subject'";
$res = mysql_query( $sql ) or die( mysql_error() );
$sqlname= " select name,sub,dept FROM examtable WHERE semester = '$semester' AND section ='$section' AND sub ='$subject' ";
$resname = mysql_query( $sqlname ) or die( mysql_error() );
$rowname = mysql_fetch_assoc( $resname );
if ( mysql_num_rows( $res ) > 0 ) {
    echo '<form method="post" >';
    while ( $row = mysql_fetch_assoc( $res ) ) {
		echo"\n";
		echo"\n";
		echo"\n";
		echo '<table border=3';
		echo '<tr>';
		echo '<th>REG NO.</th>';
		echo '<th>NAME</th>';
		echo '<th>DEPARTMENT</th>';
		echo '<th>SUBJECT</th>';
		echo '<th>MARK</th>';
		echo '<th>ATTENDENCE</th>';
		echo '<th>DELETE</th>';
		echo '</tr>';
		echo '<tr>';
        echo '<td>' . $row["regno"] . '</td>';
		echo '<td>' . $rowname["name"] . '</td>';
		echo '<td>' . $rowname["dept"] . '</td>';
		echo '<td>' . $rowname["sub"] . '</td>';
        echo '<td>'.'<input type="text" name="mark[' . @$row["regno"] . ']" value="' . @$row["mark"] . '">'.'</td>';
		echo '<td>'.'<input type="text" name="attendence[' . @$row["regno"] . ']" value="' . @$row["attendence"] .'">'. '</td>';
        echo '<input type="hidden" name="regno[]" value="' . @$row["regno"] . '">  ' . "\n";
        echo '<td>'.'<input type="checkbox" name="delete[]" value="' . @$row["regno"] . '">  ' . "Delete".'</td>';
		echo '</tr>';
		echo '</table>';
        echo "<hr>\n";
    }
    echo '<input type="submit" name="submit" value="Update">';
	 echo '<input type="submit" name="submit1" value="Delete">';
	echo '</form>';
}
}

?>





</p>
  <p>&nbsp;</p>
  
</form>

  </p>
</form>


<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="securedpage.php">
 <input type="submit" name="logout" id="logout" value="logout" />
 </form>
</body>
</html>

