<!DOCTYPE html>
<?php

include('db.php');
    $special=mysql_query ("select * from men_special");
	$snacks=mysql_query ("select * from menu_snacks");
    $starters=mysql_query ("select * from menu_starters");
    $soups=mysql_query ("select * from menu_soups");
    $drinks=mysql_query ("select * from menu_drinks");
    $desserts=mysql_query ("select * from menu_desserts");
    $main=mysql_query ("select * from menu_main");
    
?>

<?php 
session_start();
?>
<?php
$u=$_SESSION['uname'];
$p=$_SESSION['pwd'];
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	<style>
      
body {
    /* general styles */
    padding: 30px;
    font-family: 'Open Sans', sans-serif;
    color: #fff;
}

.content {
    margin: 30px;
}

h1 {
    font-family: 'Federo', sans-serif;
}
    </style>

    
 
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif" background="bg\bg1.jpg">
<center><h1>CEG's Restaurent</h1></center>
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
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="order2.php">Order Online</a></li>
   <li><a href="contact2.php">Contact</a></li>
   <li><a href="about2.php">About us</a></li>
</ul> 
</div>
<div style="float:right">
<a href="guestbook.php"><img src="bg/sign.png"></a>   
</div>
<body>
Select items:-
<form method="post" action="order3.php">
<!special>
<h2 style="text-align:center">Today'S Special</h2>
<?php
while($row=mysql_fetch_object($special))
	{
 ?>

<div class="responsive">
  <div class="img">
      <img src="<?php echo'upload/'.$row->item ?>" alt="<?php echo $row->name ?>" width="300" height="200">
    <div class="desc"><?php echo $row->name ?></div>
	<div class="desc">Cost:  <?php echo $row->cost ?></div>
  
  </div>
  <input type="checkbox" name="itemname[]" value="<?php echo $row->name?>">
 <input type="text" name="itemcost[]" value="<?php echo $row->cost?>" hidden>
  
</div>
<?php
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!Soups>

<div>
<h2 style="text-align:center">Soups</h2>
<?php
while($row=mysql_fetch_object($soups))
					  {
 ?>

<div class="responsive">
  <div class="img">
      <img src="<?php echo'upload/'.$row->item ?>" alt="<?php echo $row->name ?>" width="300" height="200">
    <div class="desc"><?php echo $row->name ?></div>
		<div class="desc">Cost:  <?php echo $row->cost ?></div>
<input type="checkbox" name="itemname[]" value="<?php echo $row->name?>">
 <input type="text" name="itemcost[]" value="<?php echo $row->cost?>" hidden>
 
 </div>
</div>
<?php
}
?>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!Starters>

<div>
<h2 style="text-align:center">Starters</h2>
<?php
while($row=mysql_fetch_object($starters))
					  {
 ?>

<div class="responsive">
  <div class="img">
      <img src="<?php echo'upload/'.$row->item ?>" alt="<?php echo $row->name ?>" width="300" height="200">
    <div class="desc"><?php echo $row->name ?></div>
		<div class="desc">Cost:  <?php echo $row->cost ?></div>
<input type="checkbox" name="itemname[]" value="<?php echo $row->name?>">
 <input type="text" name="itemcost[]" value="<?php echo $row->cost?>" hidden>
 
 </div>
</div>
<?php
}
?>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!snacks>

<div>
<h2 style="text-align:center">Snacks</h2>
<?php
while($row=mysql_fetch_object($snacks))
					  {
 ?>

<div class="responsive">
  <div class="img">
      <img src="<?php echo'upload/'.$row->item ?>" alt="<?php echo $row->name ?>" width="300" height="200">
    <div class="desc"><?php echo $row->name ?></div>
		<div class="desc">Cost:  <?php echo $row->cost ?></div>
<input type="checkbox" name="itemname[]" value="<?php echo $row->name?>">
<input type="text" name="itemcost[]" value="<?php echo $row->cost?>" hidden>
  
 </div>
</div>
<?php
}
?>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!desserts>

<div>
<h2 style="text-align:center">Desserts</h2>
<?php
while($row=mysql_fetch_object($desserts))
					  {
 ?>

<div class="responsive">
  <div class="img">
      <img src="<?php echo'upload/'.$row->item ?>" alt="<?php echo $row->name ?>" width="300" height="200">
    <div class="desc"><?php echo $row->name ?></div>
		<div class="desc">Cost:  <?php echo $row->cost ?></div>
<input type="checkbox" name="itemname[]" value="<?php echo $row->name?>">
<input type="text" name="itemcost[]" value="<?php echo $row->cost?>" hidden>
  
 </div>
</div>
<?php
}
?>
</div>
<div class="clearfix"></div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


<br><br><br><br><br><br>
<!Drinks>

<div>
<h2 style="text-align:center">Drinks</h2>
<?php
while($row=mysql_fetch_object($drinks))
					  {
 ?>

<div class="responsive">
  <div class="img">
      <img src="<?php echo'upload/'.$row->item ?>" alt="<?php echo $row->name ?>" width="300" height="200">
    <div class="desc"><?php echo $row->name ?></div>
		<div class="desc">Cost:  <?php echo $row->cost ?></div>
<input type="checkbox" name="itemname[]" value="<?php echo $row->name?>">
 <input type="text" name="itemcost[]" value="<?php echo $row->cost?>" hidden>
 
 </div>
</div>
<?php
}
?>
</div>
<input type="submit" value="Proceed" name="submit">
</form>
</body>

</html>
<style type="text/css">
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
background-color:#CC6600;
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
a {
color:white; 
text-decoration:none }

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
 }
/* The Image Box */
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

/* The Image */
div.img img {
    width: 100%;
    height: auto;
    cursor: pointer;
}

/* Description of Image */
div.desc {
    padding: 15px;
    text-align: center;
	color: white;
}

* {
    box-sizing: border-box;
}

/* Add Responsiveness */
.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0.1)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* Responsive Columns */
@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
    .modal-content {
        width: 100%;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

/* Clear Floats */
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       captionText.innerHTML = this.nextElementSibling.innerHTML;
   }
}
</script>

</style>

