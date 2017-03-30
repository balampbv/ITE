<html>
<head>
<title>CEG</title>
</head>
<?php 
session_start();
?>

<body class="padding" background="bg/44.jpg" style="font-family:ulim, @GungsuhChe font-weight: normal; font-style: normal; text-decoration: none;color:white;>
<div style="100%">
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
   <li><a href="orderedit.php">Order Summary</a></li>
   <li><a href="staffmange.php">Staff Management</a></li>
   <li><a href="contactupdate.php">Contact update</a></li>
   <li><a href="aboutupdate.php">About us</a></li>
</ul> 
<br><br><br><br>
<center>
<div  style="">

<?php

	
	// Connecting to Data Base


$mysqlport = getenv('S2G_MYSQL_PORT');

$dbhost = "localhost:".$mysqlport;


$dbuser = 'root';
$dbpass = '';



$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');



$dbname = 'details';


mysql_select_db($dbname);



  		



$query="select * from  `order`";


$result=mysql_query($query,$conn);	

	


if (!mysql_query($query,$conn))

  	{
	  
die('Error: ' . mysql_error());

  	
	}
	
echo "<table class='tt' cellpadding='10' rules='rows' border='2' cellspacing='50'  font color='white'>
<tr>
	<th>Name</th>
	<th>Orders</th>
	<th>Total</th>
</tr>";
while($row1 = mysql_fetch_array($result))
{
echo "<tr size='10%'>";
echo "<td >" . $row1['name']; "</td>";
echo "<td>" . $row1['items'];"</td>";
echo "<td>" . $row1['cost'];"</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
</center>
<br><br><br>
</body>


</html>
<style type="text/css">
table.tt
{
border:2;
display:block;
border-style:
cellspacing:10;

}

fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:5%;
padding-left:15px;
height:360px;
width:10%;
border-style:outset;
border-width:5px ;

}
body {
      font-color:#000000;
      
      background-image:url('bg/44.jpg');
      background-repeat:no-repeat;
    }
div#header {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 0%;
	}
ul
{
font-family:ulim, @GungsuhChe font-weight: normal; font-style: normal; text-decoration: none;color:white;
height:7%;

list-style-type:none;
margin: 0;
padding :0;
soverflow:hidden;
background;
position:none;
top:100%;
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
background-color:CC33FF;
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
a { text-decoration:none }

p.three
{
border-style:solid;
border-width:1px;
}
li ul { margin:0; padding:0 5px; line-height:none;height:42%;
 position:absolute; top:29px; left:0; border:solid 1px #c93300; border-width:0px 1px 1px 1px; width:180px; display:none; background:#FFFFFF;}
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

