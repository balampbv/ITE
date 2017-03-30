<!Doctype HTML>
<html>
<head><title>Delete</title></head>
<body>

<?php 
session_start();
?>
<?php
$u=$_SESSION['uname'];
$p=$_SESSION['pwd'];
echo $_SESSION['uname'];
echo $_SESSION['pwd'];

?>

<?php

	
	// Connecting to Data Base

$mysqlport = getenv('S2G_MYSQL_PORT');

$dbhost = "localhost:".$mysqlport;


$dbuser = 'root';
$dbpass = '';


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');


$dbname = 'details';

mysql_select_db($dbname);



  		


$query="DELETE FROM `user1` WHERE  username='$u' and password='$p'";


//mysql_query($query,$conn);	

	
if (!mysql_query($query,$conn))

  {
	 
 die('Error: ' . mysql_error());

  }

else
   echo"Your Account Deleted Successfully";
	


?>





<form name="form4" id="form4" action="home.php" method="POST">

<input name="act" value="HOME" type="submit" />
</form>
</body>
</html>
 