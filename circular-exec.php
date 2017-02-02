<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exam Circular Generation</title>


</head>
<SCRIPT language=JavaScript>


function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>
<body>
</body>
</html>
<?php
echo '<div id=printableArea>';
echo'<header>

<img src="circular.jpg" />
</header>';

function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($link, $str);
	}
/* $exam=clean($_POST['examtype']);
 $sem=clean($_POST['semtype']);*/
 $date=clean($_POST['sda']);
 $eda=date_create($date);
 $sda=date_create($date);
 $content=clean($_POST['content']);
 date_add($eda, date_interval_create_from_date_string('05 days'));
//echo date_format($eda, 'Y/m/d');

//$image = " ";
$newline = "<br /><br />";

//echo "<img src=".$image." Style=width:300px;height:240px;>";
 echo "Date : ";
 echo date("d/m/Y");
 echo $newline;
 echo $newline;

  /* echo "We are glad to inform that the <b>".$exam."</b> Examination for <b>".$sem."</b> semester is schedulded from <b>".date_format($sda, 'd/m/Y')." </b>to <b> ".date_format($eda, 'd/m/Y')."</b>.";
   */
   echo $newline;
   echo $_POST['content'];

 echo $newline;
 echo $newline;
 echo $newline;
 echo "Exam cell Coordinator";
echo $newline;
 echo $newline;
 echo $newline;
// To print the page
echo "<script>";
echo "function printpage()";
 echo" {";
 echo" window.print()";
  echo "}";

echo "</script>";
 echo "<input type='button' value='Print This Page' onclick='printpage()'>";
?>
</div>
<input type="button" onclick="printDiv('printableArea')" value="Print" />
