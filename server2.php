<?php
session_start();
    $name="";     //declaration //
	$address="";
	$errors=array();  //array creating //
    //data base is created
         $db = mysqli_connect('localhost','root','','db1');
	//register button is click
	if(isset($_POST['register']))
	{
		$name=$_POST['name'];    // get the values from php file //
		$address=$_POST['address'];
		$sql="INSERT INTO db_ratin (name,address) VALUES ('$name','$address',)";  //insert the values into databse//
			mysqli_query($db1,$sql);
			header('location:index.php');
			$_SESSION['name']=$username;
			$_SESSION['address']=$address;
			}