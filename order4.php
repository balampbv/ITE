<html>
<head>
<title>
Order
</title>
<?php
include('db.php');
$name=$_POST["itemname"];
$cost=$_POST["itemcost"];

?>
<?php 
session_start();
?>
<?php
$u=$_SESSION['uname'];
$p=$_SESSION['pwd'];
?>

<body background="bg/2.jpg" style="font-family:ulim, @GungsuhChe font-weight: normal; font-style: normal; text-decoration: none;color:white;>
<div>
<ul class="horizontalul">
   <li><a class="active" href="home2.php">Home</a></li>
   <li><a href="Menu2.php">Menu</a>
   <ul>
   <li ><a href="special.php">Specialities</li>
    <li ><a   href="Snacks.php">Snacks</li>
   <li ><a  href="Soups.php">Soups</li>
   <li ><a  href="Starters.php">Starters</li>
   <li ><a  href="MainCourse.php">Main Course</li>
   <li ><a  href="Desserts.php">Desserts</li>
   <li ><a  href="Drinks.php">Drinks</li>
   </ul>
   <li><a href="profile.php">My Account</a></li>

   <li><a href="gallery2.php">Gallery</a></li>
   <li><a href="order2.php">Order Online</a></li>
   <li><a href="contact2.php">Contact</a></li>
   <li><a href="about2.php">About us</a></li>
</ul> 
</div>
<br><br><br><br><br><br><br><br>
<center>
<?php

$query="select * from user1 where username='$u' and password='$p'";

$result=mysql_query($query,$con);	

$row1= mysql_fetch_array($result);
$total=0;
?>

<?php $uname =$row1['First_name'] .$row1['Last_name'] ?>
<?php echo $uname;?>

<?php
echo "<table class='tt' cellpadding='10' rules='rows' border='2' cellspacing='50'  font color='white'>
<tr>
	<th align='center'>Item Name</th>
	<th>Item Cost</th>
</tr>";

for($i=0;$i<sizeof($name);$i++)
{
$query="INSERT INTO 'order'(name,items,cost) VALUES('$u','$name[$i]','$cost[$i]')";
echo "<tr size='10%'>";
echo "<td  align='center'>". $name[$i]; "</td>";
echo "<td  align='center'>"  .$cost[$i];"</td>";
echo "</tr>";
$total=$total+$cost[$i];
mysql_query($query) or die (mysql_error());
}

echo "<td>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "<td>"; 	echo $total;echo "</td>";
echo "</table>";


?>
</center>
</body>
</html>



<style type="text/css">
div#header {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 1;
	}
table.tt
{
border:2;
display:block;
border-style:
cellspacing:10;
font color:white;
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
      font-color:white;
       background-repeat:no-repeat;
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
height:7%;
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
background-color:	#DA70D6;
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
color:white;}

p.three
{
border-style:solid;
border-width:1px;
}
li ul {
height:42%; margin:0; padding:0 5px; line-height:none; position:absolute; top:29px; left:0; border:solid 1px #c93300; border-width:0px 1px 1px 1px; width:180px; display:none; background:#FFFFFF;}
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
