<?php
session_start();
    $username="";     //declaration //
	$email="";
	$errors=array();  //array creating //
    //data base is created
         $db = mysqli_connect('localhost','root','','lawyer');
	//register button is click
	if(isset($_POST['register']))
	{
		$username=$_POST['username'];    // get the values from php file //
		$email=$_POST['email'];
		
		$pwd1=$_POST['password'];
		$pwd2=$_POST['cpassword'];
		if(strlen($username)<6)   // check username should have atleast 6 characters //
		{
			array_push($errors,"The Username should be 6 characters");
		}
		/*$sql= "SELECT username FROM Users WHERE username='$username'";
		$check=mysqli_query($db,$sql);
        if (mysql_num_rows($check)!=0)  // check the username already exist or not //
        {
               array_push($errors,"The Username Already Exists!!!");
        }*/
		$sqll= "SELECT email FROM users WHERE email='$email'";    // check the email id already exist or not //
		$checkk=mysqli_query($db,$sqll);
        if (mysqli_num_rows($checkk)!=0)
        {
               array_push($errors,"The Email Already Exists!!!");
        }
		if($username==$pwd1) // check the username and passwords are same //
		{
			array_push($errors,"The Username and Password are Same change any one field");
		}
		if(!ctype_alnum($username)) //check  the username requirements//
        {
           array_push($errors,"The Username should have alphanumeric characters only");
        }
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))  // validate tha email id //
		{
			array_push($errors,"email id is wrong");
		}
		if(strlen($pwd1)<8)     // check password should have atleast 8 characters //
		{
			array_push($errors,"The Password should be 8 characters");
		}
		if(!ctype_alnum($pwd1)) //check the password requirements//
        {
           array_push($errors,"The Password should have alphanumeric characters only");
        }
		if($pwd1!=$pwd2)  // check the passwords are same or not //
		{
			array_push($errors,"The passwords are doesn't match");
		}
		if(count($errors)==0)
		{
			$password=md5($pwd1);
			$sql="INSERT INTO law (username,email,password) VALUES ('$username','$email','$password')";  //insert the values into databse//
			mysqli_query($db,$sql);
			header('location:layer_login.html');
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
		}
    }
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		 
		//if the fields are empty
		$sql= "SELECT username FROM law WHERE username='$username'";    // check the email id already exist or not //
		$check=mysqli_query($db,$sql);
        if(mysqli_num_rows($check)==0)
        {
               array_push($errors,"you are Not Member of This SITE!!");

        }
		
		if(strlen($username)<8)
		{
			array_push($errors,"The Username should be 8 characters");
		}
	   if(!ctype_alnum($username)) //check  the username requirements//
        {
           array_push($errors,"The Username should have alphanumeric characters only");
        }

		if(strlen($password)<8)
		{
			array_push($errors,"The Password should be 8 characters");
		}
		if(!ctype_alnum($password)) //check the password requirements//
        {
           array_push($errors,"The password should have alphanumeric characters only");
        }
		if(count($errors)==0)   //  no errors // 
		{
			 
			$password=md5($password);
			$query="SELECT * FROM law WHERE username='$username' AND password='$password'";
			$result=mysqli_query($db,$query);
			if(mysqli_num_rows($result)==1)
			{
				header('location:client.html');
				$_SESSION['username']=$username; 
				if($row=mysqli_fetch_array($result)){ 
				$_SESSION['email']=$row['email'];}
				$_SESSION['password']=$password;
			}
			else
			{
				array_push($errors,"wrong Username/password combination");
			}
		}
	}
	/*if(isset($_POST['delete']))
	{
		$xuser=$_POST['xuser'];
		$pass=$_POST['pass'];
		$xpass=md5($pass);
		if(($xuser!=$username))
		{
			array_push($errors,"Dont try to Delete Third Person Account (or)");
		}
		$sql="SELECT * FROM users WHERE username='$xuser' AND password='$xpass'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)==1)
		{
		$sql1="DELETE FROM users WHERE username='$xuser' AND password='$xpass'";
		mysqli_query($db,$sql1);
		header('location:deletedisp.php');
	    }
	    else
	    {
	    	array_push($errors,"The Username or Password Incorrect");
	    }
	}
	if(isset($_POST['reset']))
	{
	   // get the values from php file //
		$email=$_POST['email'];
		$pwd1=$_POST['pwd1'];
		$pwd2=$_POST['pwd2'];
		$old=$_POST['oldpwd'];
         
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))  // validate tha email id //
		{
			array_push($errors,"email id is wrong");
		}
		$sql= "SELECT email FROM Users WHERE email='$email'";    // check the email id already exist or not //
		$check=mysqli_query($db,$sql);
        if (mysqli_num_rows($check)==0)
        {
               array_push($errors,"The Email Id Doesn't Exists Exists!!");

        }
      
		if(strlen($pwd1)<8)     // check password should have atleast 8 characters //
		{
			array_push($errors,"The Password should be 8 characters");
		}
		if(!ctype_alnum($pwd1)) //check the password requirements//
        {
           array_push($errors,"The Password should have alphanumeric characters only");
        }
		if($pwd1!=$pwd2)  // check the passwords are same or not //
		{
			array_push($errors,"The passwords are doesn't match");
		}
		if(count($errors)==0)
		{
 
			$password=md5($pwd1);
			$sql="UPDATE users SET password='$password' WHERE email='$email'";  //insert the values into databse//
			mysqli_query($db,$sql);
			header('location:login.php');

			
		}
    }*/	
?>