<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seating Arrangement For Internal Examinations</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="seating-exec.php">
  <p>
   <h3><u>Enter the details to genarate the seating arrangement for Internal Examinations</u></h3>
  </p>
  <p>
   Select the Department
   <select name="dept" size="1" id="dept">
      <option value="aero" selected="selected">AERO</option>
      <option value="civil">CIVIL</option>
      <option value="cse">CSE</option>
      <option value="ece">ECE</option>
      <option value="eee">EEE</option>
      <option value="ei">EI</option>
      <option value="it">IT</option>
      <option value="mech">MECH</option>
    </select>
  </p>
  <p>
  Select the number of colums in this hall<br />
  <input name="ctype" type="radio" id="ctype" onclick="check()" value="3" >Three<br>
  <input name="ctype" type="radio" id="ctype" onclick="check()" value="4" >Four<br>
    </p>  
  <p>
   Select the Room Type of the Exam Hall<br>
    <input name="rtype" type="radio" id="rtype" onclick="check()" value="1" >Single Seater<br>
    <input type="radio" name="rtype" id="rtype" value="2" onclick="check()">Double Seater<br>
    <input type="radio" name="rtype" id="rtype" value="3" onclick="check()">Triple Seater<br>
    </p>
  
  <p>
  SEMESTER TYPE-1
    <select name="semtype1" size="1" id="semtype1" disabled="disabled">
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
    <select name="semtype2" size="1" id="semtype2" disabled="disabled">
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
    <select name="semtype3" size="1" id="semtype3" disabled="disabled">
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
<p>
<label for="srn">Enter the starting roll number:
 </label>
    <input type="text" name="srn" id="srn" onclick="check1()" />
    <br >
    <br />
    <label for="ern">Enter the Ending roll number:
 </label>
    <input type="text" name="ern" id="ern" />
    </p>
  <p> <!<input type="submit" name="submit4" id="submit4" value="Submit" />
  
<script type="application/javascript" language="javascript">
function check(){
	
v1=document.getElementsByName("rtype");
 // alert(v1.length);
  for (var i=0;i<v1.length;i++) {
	  
	  
        if (v1[i].checked)
		 {
          v2=parseInt(v1[i].value);
		  break;
        }
  }
		
document.getElementById("semtype1").disabled="true";
document.getElementById("semtype2").disabled="true";
document.getElementById("semtype3").disabled="true";

switch(v2)
{
	case 1:
			document.getElementById("semtype1").disabled=false;
			break;
	case 2:
            document.getElementById("semtype1").disabled=false;   
  	        document.getElementById("semtype2").disabled=false;
			break;
	case 3:
			document.getElementById("semtype1").disabled=false;   
			document.getElementById("semtype2").disabled=false;   
  	        document.getElementById("semtype3").disabled=false;
			break;
	        
 }
}

function check1(){
	v2=document.getElementsByName("rtype");
	a=document.getElementById("semtype1");
	a1=parseInt(a.value);
	b=document.getElementById("semtype2");
	b1=parseInt(b.value);
	c=document.getElementById("semtype3");
	c1=parseInt(c.value);
	
	 for (var i=0;i<v2.length;i++){
	        if (v2[i].checked){
          v3=parseInt(v2[i].value);
		  break;
        }
  }
	//alert(v3);
	if(v3==3){
		if((a1==b1)||(a1==c1)){
			alert("Semesters Should Not Be Same");
			}
	else if(b1==c1){
		alert("Semesters Should Not Be Same");
		}
	}
	else if(v3==2){
		if(a1==b1){
			alert("Semesters Should Not Be Same");
		}
	 }
	}
</script>
 
	
<input type="submit" name="submit" id="submit" value="Submit" />
</form>
</body>
</html>
