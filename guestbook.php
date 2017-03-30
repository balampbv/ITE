
<html>
<head>
<title>Greek Factory</title>
</head>
<?php 
session_start();
?>
<body class="padding" background="bg/thankyou.png">
<div style="100%">
<ul class="horizontalul">
   <li><a class="active" href="homef.php">Home</a></li>
   <li><a href="Menu.php">Menu</a>
   <ul>
   <li ><a href="special.php">Specialities</li>
    <li ><a   href="Snacks.php">Snacks</li>
   <li ><a  href="Soups.php">Soups</li>
   <li ><a  href="Starters.php">Starters</li>
   <li ><a  href="MainCourse.php">Main Course</li>
   <li ><a  href="Desserts.php">Desserts</li>
   <li ><a  href="Drinks.php">Drinks</li>
   </ul>
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="order.php">Order Online</a></li>
   <li><a href="guestbook.php">Guset Book</a></li>
   <li><a href="contact.php">Contact</a></li>
   <li><a href="about.php">About us</a></li>
</ul> 
</div>
<div style="float:left; width:20%;">
	<form  class="innershadow" action="" method="post" enctype="multipart/form-data">
	<!center>	<fieldset class="padding"> 
		<legend>Comments</legend>
		<pre>
Name      : <input type="text" name="uname" required >


			
Email Id  : <input type="mail" name="mail" required>


comments   :
            <textarea name="comments" required rows="8" cols="40" ></textarea>
		</pre></center><br>
<center><input type="submit" value="Comment" name="save"><br><br>
</div>
<div  style="float:right; width:40%;">
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
  $name=$_POST['uname'];
  $mail=$_POST['mail'];
  $comment=$_POST['comments'];
  
  
	   //insert to database
     $query= mysql_query("INSERT INTO comments(name,mail,comments) values('$name','$mail','$comment')");
	 if($query)
     {

	 }	  
	 else if(!$query)
	 {
		 echo "not save";
	 }
  
}
mysql_close();
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



  		



$query="select * from  comments";


$result=mysql_query($query,$conn);	

	


if (!mysql_query($query,$conn))

  	{
	  
die('Error: ' . mysql_error());

  	
	}
	
echo "<table class='tt' cellpadding='10' rules='rows' border='2' cellspacing='50'  height='200'>
<tr>
	<th>Name</th>
	<th>Mail Id</th>
	<th>Comments</th>
</tr>";
while($row1 = mysql_fetch_array($result))
{
echo "<tr size='10%'>";
echo "<td >" . $row1['name']; "</td>";
echo "<td>" . $row1['mail'];"</td>";
echo "<td>" . $row1['comments'];"</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
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
div#header {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 0%;
	}
ul
{
height:7%;

list-style-type:none;
margin: 0;
padding :0;
overflow:hidden;
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
color:black;
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
background-color:FFFF00;
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

