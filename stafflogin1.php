<!Doctype HTML>
<html>
<head><title>Login</title></head>
<body>
<?php
session_start();
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

 $_SESSION['uname']=$_POST["uname"];
 $_SESSION['pwd']=$_POST["pwd"];
 
 
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];


  		
$query="select * from staff where username='$uname' and password='$pwd' ";

$result=mysql_query($query,$conn);	

	if (!mysql_query($query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	//else
		//echo "Connection Success!!<br>";
	
?>

<?php

$row1= mysql_fetch_array($result);
if($row1['password']!=NULL&&$row1['designation']=="Food & Beverage Manager")
{
echo "Login Success<br>";
?>

<br>WELCOME <?php echo $row1['First_name'] ?>&nbsp;&nbsp; <?php echo $row1['Last_name'];?><br><br>
<?php
echo "<br> Click here to go <a href='home3.php'>HOME</a><br>";
}
else if($row1['password']==NULL)
{
echo "<br>Login Failed<br>";
echo "<br>Ur Account doesn't Exist<br><br>";
echo "Click here to<a href='signup.html'>Sign-Up</a>";
}
else
{
echo "Login Success<br>";
?>

<br>WELCOME <?php echo $row1['First_name'] ?>&nbsp;&nbsp; <?php echo $row1['Last_name'];?><br><br>
<?php
echo "<br> Click here to go <a href='home4.php'>HOME</a><br>";
}

?>
<?php
$_SESSION['fname']=$row1['First_name'];
?>

</body>
</html>