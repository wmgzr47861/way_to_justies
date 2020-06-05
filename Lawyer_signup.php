<html>
<h2>Lawyer Sign Up Page</h2>
<head>
<script>

function validate1(){
	var tc1=document.forms.lform.tc;

	if(tc1==8){
		alert("verified ur details");
		return false;
	}


var pc1=document.forms.lform.pc;

		if(pc1==3){
			alert("verified ur details");
			return false;
		}



var fc1=document.forms.lform.fc;
			if(fc1==5){
	alert("verified ur details");
	return false;
}
	
}



</script>
</head>
<body>
<form name="lform"   onSubmit="return validate1()" >
<p>Lawyer Name:<input type="text" name="LN"></p>
<p>Lawyer Age:<input type="text" name="LA"></p>
<p>Sex:<input type="text" name="Se"></p> 
<p>District:<input type="text" name="dt1"> </p>
<p>Number Of Cases Handled:<input type="text" name="tc" ></p>
<p>Number of Pass Cases:<input type="text" name="pc" ></p>
<p>Number of Fail Cases:<input type="text" name="fc" ></p>
<p>Adhaar Number:<input type="text" name="An"></p>

<button><a href="lawyer_login.html">submit</a></button>
<button><a href="lawyer_login.html">already signin</a></button>
</form>
</body>
</html>