<!Doctype HTML>
<html>
<head><title></title></head>
<body>
<form name="form4" id="form4" action="signup.html" method=post>
<input name="act" value="Back" type="submit" />
</form>

<?php
	
	// Connecting to Data Base
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;

$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');

$dbname = 'details';
mysql_select_db($dbname);


  	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$age=$_POST["age"];
	$gen=$_POST["gen"];
	$mail=$_POST["mailid"];
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$nmum=$_POST["mnum"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$fav=$_POST["fav_food"];

$sql_insert="INSERT INTO user1(First_name,Last_name,Age,Gender,mailid,username,password,mobile,state,city,fav_food)VALUES('$fname','$lname','$age','$gen','$mail','$uname','$pwd','$nmum','$state','$city','$fav')";

//if($staff_no == NULL OR $staff_name == NULL OR $staff_designation == NULL)
//	die('Please enter values for all the fields');
	
//	else
	{
	if (!mysql_query($sql_insert,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else
		echo "Welcome To Greek Factory!!!";
	}


mysql_close($conn)

?><br><br><br><br>
<a href="login.html">Click to Login</a>
</body>
</html>