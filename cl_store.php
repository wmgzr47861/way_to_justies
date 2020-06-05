<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("lawyer",$conn);
if(isset($_POST['btn btn--form']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['passwordRepeat'];
$district=$_POST['dc'];
$phone_no=$_POST['ph'];
$no_ofcase=$_POST['pc'];
$adhaar_number=$_POST['ac'];
if($username !='' || $email !='')
{
$sql=mysql_query("INSERT INTO cl_law (username,email,password,district,phone_no,no_ofcase,adhaar_number) VALUES ('$username','$email','$password','$district','$phone_no','$no_ofcase','$adhaar_number')");
mysql_query($sql,$conn);
header('location:client_login.php');
}
else
{
echo"<p> INSERCTION FAIL</P>";
}
}
mysql_close($conn);
?>