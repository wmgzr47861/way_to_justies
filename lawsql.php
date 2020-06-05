
<?php
session_start();
    $username="";     //declaration //
	$email="";
	$errors=array(); 
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("lawyer", $connection); // Selecting Database from Server
if(isset($_POST['la_reg'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];
$no_ofcase=$_POST['tc'];

$no_of_passcase=$_POST['pc'];
$no_of_failcase=$_POST['fc'];
$adhaar_number=$_POST['ac'];
$query1=mysql_query("select FIRNO from la_lasw1 where adhaar_number='$adhaar_number' ");

if (mysql_num_rows($query1)!=$no_ofcase)
        {
               array_push($errors,"yuor no_ofcaseis wrong");
        }
		


if(count($errors)==0){
//Insert Query of SQL
$query = mysql_query("insert into la_lasw1(username, email, password, no_ofcase,no_of_passcase,no_of_failcase) values ('$username', '$email', '$password','$no_ofcase','$no_of_passcase','$no_of_failcase')");
mysql_query($query,$connection);


header('location:client_login.html');
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "no of cases is wrong"<br>"please go to back";
}
}
mysql_close($connection); // Closing Connection with Server
?>
