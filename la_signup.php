
<html>
<?php include('server1.php'); ?>
<head>
<style>
@function remy($value) {
  @return ($value / 16px) * 1rem;
}

body {
  font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
  background: #e9e9e9;
}
a,
[type="submit"] {transition: all .25s ease-in;}
.signup__container {
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  margin-right: auto;
  margin-left: auto;
  transform: translateY(-50%);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  width: remy(800px);
  height: remy(480px);
  border-radius: remy(3px);
  box-shadow: 0px remy(3px) remy(7px) rgba(0,0,0,.25);
}
.signup__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.76);
}
.container__child {
  width: 50%;
  height: 100%;
  color: #fff;
}
.signup__thumbnail {
  position: relative;
  padding: 2rem;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  background: url(image1.jpg);
  background-repeat: no-repeat;
  background-position: top center;
  background-size: cover;
}
.thumbnail__logo,
.thumbnail__content,
.thumbnail__links {
  position: relative;
  z-index: 2;  
}
.thumbnail__logo {align-self: flex-start;}
.logo__shape {fill: #fff;}
.logo__text {
  display: inline-block;
  font-size: .8rem;
  font-weight: 700;
  vertical-align: bottom;
}
.thumbnail__content {align-self: center;}
h1,
h2 {
  font-weight: 300;
  color: rgba(255,255,255,1);
}
.heading--primary {font-size: 1.999rem;}
.heading--secondary {font-size: 1.414rem;}
.thumbnail__links {
  align-self: flex-end;
  width: 100%;
}
.thumbnail__links a {
  font-size: 1rem;
  color: #fff;
  &:focus,
  &:hover {color: rgba(255,255,255,.5);}
}
.signup__form {
  padding: 2.5rem;
  background: #fafafa;
}
label {
  font-size: .85rem;
  text-transform: uppercase;
  color: #151A78;
}
.form-control {
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
  &:focus {border-color: #111;}
}
[type="text"] {color: #111;}
[type="password"] {color: #111;}
.btn--form {
  padding: .5rem 2.5rem;
  font-size: .95rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #fff;
  background: #111;
  border-radius: remy(35px);
  &:focus,
  &:hover {background: lighten(#111, 13%);}
}
.signup__link {
  font-size: .8rem;
  font-weight: 600;
  text-decoration: underline;
  color: #999;
  &:focus,
  &:hover {color: darken(#999, 13%);}
}
</style>

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
<div class="signup__container">
  <div class="container__child signup__thumbnail">
   
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome To Way To Justice</h1><br>
      <h2 class="heading--secondary">Are you ready to join member of the lawyer?</h2>
    </div><div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center"><br>        
		<li><p>Appointment notification<p></li>
		<li><p>View client details<p></li>
        <br><br>
        
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form name="lform"   method="post" action="layer_login.html" onSubmit="return validate1()" >
	<?php
include('errors.php');
?>
      <div class="form-group">
        <label for="username">Username</label>
		<br>
        <input class="form-control" type="text" name="username" id="username" placeholder="username" required />
      </div>
      <div class="form-group">
        <label for="email" >Email</label><br>
        <input class="form-control" type="text" name="email" id="email" placeholder="email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label><br>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>
      <div class="form-group">
        <label for="passwordRepeat">confirm Password</label><br>
        <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" placeholder="********" required />
      </div>
	  <div class="form-group">
        <label for="Number Of Cases Handled">Number Of Cases Handled</label><br>
        <input class="form-control" type="text" name="tc" id="tc" required />
      </div>
	  <div class="form-group">
        <label for="Number of Pass Cases:">Number of Pass Cases:</label><br>
        <input class="form-control" type="text" name="pc" id="pc"  required />
      </div>
	  <div class="form-group">
        <label for="Number of Fail Cases:">Number of Fail Cases:</label><br>
        <input class="form-control" type="text" name="fc" id="fc"  required />
      </div>
	  <div class="form-group">
        <label for="Adhaar Number">Adhaar Number:</label><br>
        <input class="form-control" type="text" name="ac" id="ac"  required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" name="register " />
          </li>
          <li>
            <a class="signup__link" href="lawyer_login.html">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
</body>
</html>