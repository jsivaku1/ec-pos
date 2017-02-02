


<?php
include("config.php");
$year=intval($_GET['year']);
$query="SELECT * FROM dept WHERE yearid='$year'";
$result=mysqli_query($link,$query);

?>
<select name="dept" onchange="getsemes(<?php echo $year;?>,this.value)" style="width:210px;">
<option value="">Select Dept</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['deptid']?>><?php  echo $row['dept']?></option>
<?php  } ?>
</select>
