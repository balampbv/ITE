<!Doctype HTML>
<html>
<head><title></title></head>
<body>
<form name="form4" id="form4" action="staffsign.php" method=post>
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
	$dateb=$_POST["dateb"];
	$monthb=$_POST["monthb"];
	$yearb=$_POST["yearb"];
	$doj=$_POST["doj"];
	$design=$_POST["design"];
	$mail=$_POST["mailid"];
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$nmum=$_POST["mnum"];
	$state=$_POST["state"];
	$city=$_POST["city"];

$sql_insert="INSERT INTO staff(First_name,Last_name,Age,Gender,dateb,monthb,yearb,doj,designation,mailid,username,password,mobile,state,city)VALUES('$fname','$lname','$age','$gen','$dateb','$monthb','$yearb','$doj','$design','$mail','$uname','$pwd','$nmum','$state','$city')";

	
	if (!mysql_query($sql_insert,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else
		echo "Welcome To Greek Factory!!!";
	


mysql_close($conn)

?><br><br><br><br>
<a href="stafflogin.php">Click to Login</a>
</body>
</html>