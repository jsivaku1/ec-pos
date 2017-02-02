
<?php
include("config.php");
$dept=intval($_GET['dept']);
$semes=intval($_GET['semes']);

$query="SELECT * FROM subject WHERE deptid='$dept' and semid='$semes'";
$result=mysql_query($query);

?>
<select name="subject"  style="width:210px;"  >
<option>Select Subject</option>
<?php while($row=mysqli_fetch_array($link,$result)) { ?>
<option value=<?php echo $row['id']?>><?php  echo $row['subject']?></option>
<?php  } ?>
</select>
