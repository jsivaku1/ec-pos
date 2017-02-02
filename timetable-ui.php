<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Timetable Generation</title>
<link rel="stylesheet" href="cal\cal-ui.css" />
  <script src="cal\cal.js"></script>
  <script src="cal\cal-ui.js"></script>
  <!--<link rel="stylesheet" href="/resources/demose.css/styl" />-->
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>

<body>
<form id="form1" name="form1" method="post" action="timetable-exec.php">

<p>
   <h3><u>Enter the details to genarate the timetable</u></h3>
</p>
<p>
  EXAMINATION TYPE
    <select name="examtype" size="1" id="examtype">
      <option value="Cycle test-1" selected="selected">Cycle test-1</option>
      <option value="Cycle test-2">Cycle test-2</option>
      <option value="Model">Model</option>
      <option value="Semester Theory">Semester Theory</option>
      <option value="Semester Practials">Semester Practials</option>
     </select>
    
<!<input type="submit" name="submit2" id="submit2" value="Submit" /> 
</p>
 <p>
    <label for="sda">Starting date : </label>
    
    <input type="text" name="sda" id="datepicker" />
  </p>
 <p>
  SEMESTER TYPE-1
    <select name="semtype1" size="1" id="semtype1" onclick="check()">
      <option value="1" selected="selected">sem1</option>
      <option value="2">sem2</option>
      <option value="3">sem3</option>
      <option value="4">sem4</option>
      <option value="5">sem5</option>
      <option value="6">sem6</option>
      <option value="7">sem7</option>
      <option value="8">sem8</option>
    </select>
<!<input type="submit" name="submit2" id="submit2" value="Submit" action="submit3" />  </p>
    <p>
    SEMESTER TYPE-2
    <select name="semtype2" size="1" id="semtype2">
      <option value="1">sem1</option>
      <option value="2">sem2</option>
      <option value="3">sem3</option>
      <option value="4">sem4</option>
      <option value="5">sem5</option>
      <option value="6">sem6</option>
      <option value="7">sem7</option>
      <option value="8">sem8</option>
    </select>
</p>
  <p> <!<input type="submit" name="submit3" id="submit3" value="submit4" />
  
    SEMESTER TYPE-3
    <select name="semtype3" size="1" id="semtype3">
      <option value="1">sem1</option>
      <option value="2">sem2</option>
      <option value="3">sem3</option>
      <option value="4">sem4</option>
      <option value="5">sem5</option>
      <option value="6">sem6</option>
      <option value="7">sem7</option>
      <option value="8">sem8</option>
    </select>

  <!<input type="submit" name="submit4" id="submit4" value="Submit" />
  </p>
  <p> <!<input type="submit" name="submit3" id="submit3" value="submit4" />
  
    SEMESTER TYPE-4
    <select name="semtype4" size="1" id="semtype4">
      <option value="1">sem1</option>
      <option value="2">sem2</option>
      <option value="3">sem3</option>
      <option value="4">sem4</option>
      <option value="5">sem5</option>
      <option value="6">sem6</option>
      <option value="7">sem7</option>
      <option value="8">sem8</option>
    </select>

  <!<input type="submit" name="submit4" id="submit4" value="Submit" />
  </p>
  

  <input type="submit" name="submit" id="submit" value="Submit" />
</form>


<script type="application/javascript" language="javascript">

function check(){
	
v1=document.getElementsByName("sda");
for (var i=0;i<v1.length;i++)
 {
        if (1==1)
		 {
          v2=new Date(v1[i].value);
		  break;
        }
  }
  v3=v2.getDay();
  v4=parseInt(v3);
 // alert(v4);
  if (v4!=1)
  {
	alert("Please Select Monday");
	}
}

</script>

</body>
</html>