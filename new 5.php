
<?php
session_start();
    $username="";     //declaration //
	$email="";
	$errors=array(); 
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("lawyer", $connection); // Selecting Database from Server
if(isset($_POST['cl_reg'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];
$district=$_POST['dc'];
$phone_no=$_POST['ph'];
$no_ofcase=$_POST['pc'];
$adhaar_number=$_POST['ac'];
$query1=mysql_query("select FIRNO from cl_law1 where adhaar_number='$adhaar_number' ");

if (mysql_num_rows($query1)!=$no_ofcase)
        {
               array_push($errors,"yuor no_ofcaseis wrong");
        }
if(count($errors)==0){
//Insert Query of SQL
$query = mysql_query("insert into cl_law1(username, email, password, district, phone_no, no_ofcases) values ('$username', '$email', '$password','$district','$phone_no','$no_ofcase')");
mysql_query($query,$connection);


header('location:client_login.html');
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "no of the case is wrong" <br> "please go to back";
}
}
mysql_close($connection); // Closing Connection with Server
?>
