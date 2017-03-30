<html>
<head><title>Update</title>
<link rel="stylesheet" type="text/css" href="test.css"/>
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
<!Doctype HTML>
<html>
<head><title>UPDATE</title></head>
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





  		

$query="select * from user1 where  username='$u' and password='$p'";


$result=mysql_query($query,$conn);	

	
if (!mysql_query($query,$conn))
  
	{
	  
die('Error: ' . mysql_error());
  	
}

$row= mysql_fetch_array($result);

?>	




<form method="POST" action="update2.php">
<font  size="3">
<body class="padding">
<div class="darkshadow"><fieldset  class="padding">
		
<pre>
	First Name               :<input type="text" name="fname"  required autofocus size="20" value="<?php echo $row['First_name']?>" >

	Last Name                :<input type="text" name="lname" required value="<?php echo $row['Last_name']?>">
			
	Age			 :<input type="text" name="age" required  size="4" value="<?php echo $row['Age'];?>">

	Gender                   :<input type="radio" name="gen" value="male">MALE<input type="radio" name="gen" value="female">Female<input type="radio" name="gen" value="other">Others
							
			
	Email Id		 :<input type="email" name="mailid" required value="<?php echo $row['mailid'];?>">
			
	User Name		 :<input type="text" name="uname" required value="<?php echo $row['username']?>" disabled>
			
	Mobile No                :<input type="text" name="mnum"  required value="<?php echo $row['mobile'];?>">

	State			 :<input type="text" name="state"  required value="<?php  echo $row['state']; ?>">

	City                     :<input type="text" name="city"  required value="<?php echo $row['city'];?>">

	Favorite Foods           :<select name="fav_food" value="<?php echo $row['fav_food'];?>>
						<option  val="food"></option>
       					       	<option  val="nindian">North Indian</option>
						<option  val="sindian">South Indian</option>
						<option  val="Chinese">Chinese</option>
						<option  val="french">French</option>
						<!option  val="c">"C"</option>
						<!option  val="CN">Computer Networks</option></select>
				
				<center><input type="submit" value="UPDATE" ></form>
				<br>&nbsp;&nbsp;&nbsp;<form action="profile.php" method="POST"><input type="submit" value="CANCEL"></form></center>
	
</center>

</pre>
</div>

</form>

  
  
 

</body>
</html>




<style type="text/css">
p.one 
{
border-style:solid;
border-width:5px;
}
fieldset.two 
{
border-style:outset;
border-width:7	px ;
}
p.three
{
border-style:solid;
border-width:1px;
}
fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:15%;
padding-left:-5px;
border-style:outset;
border-width:5px ;

}
body.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:55%;
padding-left:25%;
}
button.rounded-corners
{
  background-color:lightgrey;
  width:250px;
  height:125px;
  padding:10px;

  border-radius: 10px 10px 10px 10px;
  -ms-border-radius: 10px 10px 10px 10px;
  -moz-border-radius: 10px 10px 10px 10px;
  -webkit-border-radius: 10px 10px 10px 10px;
  -khtml-border-radius: 10px 10px 10px 10px;
}
;;;

</style>
 