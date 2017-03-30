<html>
<head>
</head>
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



  		



$query="select * from user1 where username='$u' and password='$p'";


$result=mysql_query($query,$conn);	

	


if (!mysql_query($query,$conn))

  	{
	  
die('Error: ' . mysql_error());

  	}
echo "<center>";	

echo "<table border='2'>

<tr>
	<th>First name</th>
	<th>Last name</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Maild Id</th>
	<th>Mobile</th>
	<th>State</th>
	<th>City</th>
	<th>Favorite food Variety</th>
</tr>";

while($row= mysql_fetch_array($result)) 
{
echo "<tr>";
 echo "<td>" . $row['First_name']; "</td>";
 echo "<td>" . $row['Last_name'];"</td>";
echo "<td>" . $row['Age'];"</td>";
 echo "<td>" . $row['Gender'];"</td>";
echo "<td>" . $row['mailid'];"</td>";
 echo "<td>" .  $row['mobile'];"</td>";
echo "<td>" . $row['state'];"</td>";
 echo "<td>" .  $row['city'];"</td>";
 echo "<td>" .  $row['fav_food'];"</td>";

echo "</tr>";

} 
echo "</table>";






echo "</center>";



?>
<br>
<center><div>Do u want to continue?</div></center><br>
<center>
<div>
<form name="form1"  action="delete.php" method="POST">
<input type='submit' name='SUBMIT' value='CONFIRM'>
</form>
<form name="f2" action="profile.php" method="POST">
<input name="act" value="ABORT" type="submit" />
</form>
</div>
</center>



<body>
</body>
</html>
