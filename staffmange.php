
<html>
<head>
<title>Greek Factory</title>
</head>
<?php 
session_start();
?>
<?php

$_SESSION['uname'];
$_SESSION['pwd'];
$name=$_SESSION['fname'];
echo $_SESSION['uname'];
echo $_SESSION['pwd'];
?>

<body class="padding" background="bg/88.jpg" style="color:white">
<div>
<ul class="horizontalul">
   <li><a class="active" href="home3.php">Home</a></li>
   <li><a href="Menuupdate.php">Menu Update</a>
   <ul>
   <li ><a href="special.php">Specialities</li>
    <li ><a   href="Snacks.php">Snacks</li>
   <li ><a  href="Soups.php">Soups</li>
   <li ><a  href="Starters.php">Starters</li>
   <li ><a  href="MainCourse.php">Main Course</li>
   <li ><a  href="Desserts.php">Desserts</li>
   <li ><a  href="Drinks.php">Drinks</li>
   </ul>
   <li><a href="staffprofile.php">My Account</a></li>
   <li><a href="payroll.php">Payroll</a></li>
   <li><a href="galleryupdate.php">Gallery update</a></li>
   <li><a href="ordersummary.php">Order Summary</a></li>
   <li><a href="guestbookedit.php">Guest Book summary</a></li>
   <li><a href="contactupdate.php">Contact update</a></li>
   <li><a href="aboutupdate.php">About us</a></li>
</ul> 
</div>



<div style="color:white;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome    Admin    <?php echo $_SESSION['fname']; ?>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php">Log out</a>
</div>

	<form action="" method="post" enctype="multipart/form-data">
Select the Category :       :<select name="design">
						<center><option>-----------------Select-------------</center></option>
						<option value="Food & Beverage Manager">Food & Beverage Manager</option>
						<option value="Supervisor">Supervisor</option>
						<option value="2nd Supervisor">2nd Supervisor</option>
						<option value="Waiter">Waiter</option>
						<option value="Head chef">Head chef</option>
						<option value="Asst Head chef">Asst Head chef</option>
						<option value="Head Cook">Head Cook</option>
						<option value="Asst Head Cook">Asst Head Cook</option>
						<option value="South Indian Cook">South Indian Cook</option>
						<option value="All Rounder Cook">All Rounder Cook</option>
						<option value="Kitchen Helper">Kitchen Helper</option>
						<option value="Utilities">Utilities</option>
						<option value="Chinese Cook">Chinese Cook</option>
						<option value="Indian Cook">Indian Cook</option>
						<option value="Tandoor Cook">Tandoor Cook</option>
						<option value="Cashier">Cashier</option>
						<option value="Food Delivery Boy">Food Delivery Boy</option>
						
						</select>
<input type="submit" value="Select" name="save">
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

if(isset($_POST['save']))
{
  $design=$_POST['design'];
  
  
	 //Select From database
     $query= "select  * From staff where designation='$design'";
	 
$result=mysql_query($query,$conn);


if($result==NULL)
{
echo"No Staffs";
}
else
{
echo "<center>";

echo "<table border='2'>


<tr>

	<th>Employee Name</th>

	<th>Gender</th>

	<th>Designation</th>

	<th>Mail ID</th>

	<th>Date of joining</th>

	<th>Mobile</th>

</tr>";

while($row= mysql_fetch_array($result))
{

echo "<tr>";
?>
<td> <?php echo $row['First_name'] ?>&nbsp <?php echo  $row['Last_name'];?> </td>
<?php
echo "<td>" . $row['Gender'];
"</td>";
echo "<td>" . $row['designation'];
"</td>";
echo "<td>" . $row['mailid'];
"</td>";
echo "<td>" .  $row['doj'];
"</td>";
echo "<td>" . $row['mobile'];
"</td>";
echo "</tr>";

}
echo "</table>";

echo "</center>";
}	 
$result=mysql_query($query,$conn);


echo"<br><br><br><br>";

echo"<br><br>";

echo "<form  action='' method='post' enctype='multipart/form-data'>";

echo "Select the staff to Remove    : <select name='uname'>";
echo "<option value=''>" ;   echo"</option>";
 
while($row1= mysql_fetch_array($result))
{

?>
 <option value="<?php echo $row1['First_name'] ?>"> <?php echo $row1['First_name'] ?> <?php echo $row1['Last_name'] ?> </option>
<?php
}
echo "</select>";
echo"<br><br><br><br>";
 
echo "<input type='submit' name='delete' value='Remove'>";
echo "</form>";

}
?>

<?php


if(isset($_POST['delete']))
{
  $name=$_POST['uname'];
  
	
$query= "DELETE FROM `staff` WHERE `First_name`= '$name'";
	 
		
	
if (!mysql_query($query,$conn))

  {
	 
 die('Error: ' . mysql_error());

  }

else
echo
"<script>
alert('Staff Removed Successfully');
</script>";

}
mysql_close();
?>

</body>

</html>

<style type="text/css">
div#header {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 1;
	}
ul
{
height:7%;
list-style-type:none;
margin: 0;
padding :0;
overflow:hidden;

position:none;
top:0%;
width:100%
}
li
{
float:left;

}
li:last-child
{
float:left;
border-right:none;
}
li a{

display:block;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:;
}
li a:hover
{
a:active
{
background-color:#111
};
background-color:#663366;
}

	p.one 
{
border-style:solid;
border-width:5px;
}
frameset.two 
{
border-style:solid;
border-width:medium;
}
a { text-decoration:none;
color:white; }

p.three
{
border-style:solid;
border-width:1px;
}
li ul {height:42%; margin:0; padding:0 5px; line-height:none; position:absolute; top:29px; left:0; border:solid 1px #c93300; border-width:0px 1px 1px 1px; width:180px; display:none; background:#FFFFFF;}
li:hover ul { display:block }
li:hover a {color:white; background::#4CAF50;
}
li ul li { display:block;  border-bottom:solid 3px #888888 ; width:100%; background:url(images/d_horizontal_red_classic_menu_arrow.gif) no-repeat 3px 12px; padding:10px 2px  10px; }
li ul li:last-child { border-bottom:0px;}
li ul a { border-width:10px; color:#909090; padding:0 5px 0 0; background-color:transparent;}
li:hover ul li a { color:#909090}
li ul li a:hover {color:white; background::#4CAF50;
}
</style>

