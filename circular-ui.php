<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exam Circular Generation</title>
<link rel="stylesheet" href="cal\cal-ui.css" />
  <script src="cal\cal.js"></script>
  <script src="cal\cal-ui.js"></script>
  <link rel="stylesheet" href="/resources/demose.css/styl" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>

<body>
<form id="form1" name="form1" method="post" action="circular-exec.php">
<p>
   <h3><u>Enter the details to genarate the circular</u></h3>
  </p>
 <p>
    <label for="sda">Select Date : </label>
    
    <input type="text" name="sda" id="datepicker" />
  </p>
  <p>
  <label for="content">Enter The Content For The Circular</label>
  <br />
  <br />
  
 <textarea name="content" rows="5" cols="40" onclick="check()" ></textarea>  
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
  //alert(v4);
  if(v4==" ")
  {
	alert("Selecting date is mandatory");
  }
}

</script>
 </body>
</html>