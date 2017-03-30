<!Doctype HTML>
<html>
<head><title></title></head>
<?php 
session_start();
?>
<?php
$u=$_SESSION['uname'];
$p=$_SESSION['pwd'];
//echo $_SESSION['uname'];
//echo $_SESSION['pwd'];

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


    $uname=$_POST["uname"];
	$npwd=$_POST["npwd1"];


	
$sql_update="UPDATE `user1` SET Password='$npwd'  where Username = '$uname'";

if('$uname'=='u')
{
mysql_query($sql_update,$conn);
}

	
else if(!mysql_query($sql_update,$conn))
  
	{
	  die('Error: ' . mysql_error());
  	}
	
else
		echo "Your Password has been changed Successfully";
	

mysql_close($conn);

?>

<?php
$u=$_SESSION['uname'];
$_SESSION['pwd']=$_POST["npwd1"];
//echo $_SESSION['uname'];
//echo $_SESSION['pwd'];

?>

<form name="form4" id="form4" action="profile.php" method="POST">

<input name="act" value="Back" type="submit" />
</form>

<b  r><br><br><br>
</body>
</html>
