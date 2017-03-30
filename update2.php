<!Doctype HTML>
<html>
<head><title></title></head>
<?php 
session_start();
?>
<?php
$u=$_SESSION['uname'];
$p=$_SESSION['pwd'];
echo $_SESSION['uname'];
echo $_SESSION['pwd'];

?>

<body>
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
	$nmum=$_POST["mnum"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$fav=$_POST["fav_food"];


	
$sql_update="UPDATE `user1` SET First_name='$fname' , Last_name='$lname' ,Age='$age',Gender='$gen',mailid='$mail',mobile='$nmum',state='$state',city='$city'  where username='$u'";

mysql_query($sql_update,$conn);

if($fname == NULL OR $lname == NULL OR $age == NULL OR $gen == NULL OR $mail == NULL)
  die('Please enter values for all the fields');
	
else
	{
	if (!mysql_query($sql_update,$conn))
  
	{
	  die('Error: ' . mysql_error());
  	}
	
else
		echo "Your Details updateted Successfully";
	}


mysql_close($conn);

?>

<form name="form4" id="form4" action="profile.php" method="POST">

<input name="act" value="Back" type="submit" />
</form>

<br><br><br><br>
</body>
</html>
