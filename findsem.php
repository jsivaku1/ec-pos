

<?php
include("config.php");
 $year=intval($_GET['year']);
$dept=intval($_GET['dept']);
$query="SELECT * FROM semes WHERE yearid='$year' and depid='$dept'";
$result=mysqli_query($link, $query);

?>
<select name="semes" onchange="getsubject(<?php echo $dept;?>,this.value)" style="width:210px;" >
<option value="">Select Semester</option>
<?php while($row=mysqli_fetch_array($link,$result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['semes']?></option><?php } ?>
</select>
