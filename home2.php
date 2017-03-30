
<html>
<head>
<title>CEG's Restaurent</title>
<head>
<link rel="stylesheet" type="text/css" href="woble.css"/> 
  
</head>
<?php 
session_start();
?>
<?php

$_SESSION['uname'];
$_SESSION['pwd'];
$name=$_SESSION['fname'];
?>

<?php
setcookie("user", "$name", time()-3);
?>

<body class="padding" background="bg/pp.jpg">
<!div id="header">
<!h3Greek Factory</h3>
<!/div>
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
   <li><a href="contact1.php">Contact</a></li>
   <li><a href="about2.php">About us</a></li>
</ul> 
</div>


<div style="color:white;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome&nbsp;&nbsp;&nbsp;&nbsp;     <?php echo $_SESSION['fname']; ?>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="homef.php">Log out</a>
</div>
<div>

<img src="bg/wel.png" width="400" height="300" class="woble">
</img>
</div>
<div id="quote" class="bounce">
<blockquote>
"COME FOR THE FOOD.....<BR>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STAY FOR THE FUN...."

</blockquote>
</div>
<br><br><!a href="signup.html"Sign-UP</a><br>
</body>
</html>
<style type="text/css">
#quote
{
float:right;
    float: right;
    transition-delay: initial;
    text-decoration: blink;
    font-size: xx-large;
    font-family:monospace;
    font-stretch: semi-expanded;
    font-variant-ligatures: inherit;
    touch-action: initial;
    transition-duration: initial;
    transition-timing-function: cubic-bezier;
}

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
background-color:#00FF00;
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

.bounce{
  animation: animationFrames linear 2s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  -webkit-animation: animationFrames linear 2s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -moz-animation: animationFrames linear 2s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -o-animation: animationFrames linear 2s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -ms-animation: animationFrames linear 2s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
}

@keyframes animationFrames{
  0% {
    transform:  translate(0px,0px)  skewX(0deg) ;
  }
  15% {
    transform:  translate(0px,-25px)  ;
  }
  30% {
    transform:  translate(0px,0px)  ;
  }
  45% {
    transform:  translate(0px,-15px)  skewX(1deg) ;
  }
  60% {
    transform:  translate(0px,0px)  skewX(1deg) ;
  }
  75% {
    transform:  translate(0px,-5px)  skewX(1deg) ;
  }
  100% {
    transform:  translate(0px,0px)  skewX(1deg) ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    -moz-transform:  translate(0px,0px)  skewX(0deg) ;
  }
  15% {
    -moz-transform:  translate(0px,-25px)  ;
  }
  30% {
    -moz-transform:  translate(0px,0px)  ;
  }
  45% {
    -moz-transform:  translate(0px,-15px)  skewX(1deg) ;
  }
  60% {
    -moz-transform:  translate(0px,0px)  skewX(1deg) ;
  }
  75% {
    -moz-transform:  translate(0px,-5px)  skewX(1deg) ;
  }
  100% {
    -moz-transform:  translate(0px,0px)  skewX(1deg) ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    -webkit-transform:  translate(0px,0px)  skewX(0deg) ;
  }
  15% {
    -webkit-transform:  translate(0px,-25px)  ;
  }
  30% {
    -webkit-transform:  translate(0px,0px)  ;
  }
  45% {
    -webkit-transform:  translate(0px,-15px)  skewX(1deg) ;
  }
  60% {
    -webkit-transform:  translate(0px,0px)  skewX(1deg) ;
  }
  75% {
    -webkit-transform:  translate(0px,-5px)  skewX(1deg) ;
  }
  100% {
    -webkit-transform:  translate(0px,0px)  skewX(1deg) ;
  }
}

@-o-keyframes animationFrames {
  0% {
    -o-transform:  translate(0px,0px)  skewX(0deg) ;
  }
  15% {
    -o-transform:  translate(0px,-25px)  ;
  }
  30% {
    -o-transform:  translate(0px,0px)  ;
  }
  45% {
    -o-transform:  translate(0px,-15px)  skewX(1deg) ;
  }
  60% {
    -o-transform:  translate(0px,0px)  skewX(1deg) ;
  }
  75% {
    -o-transform:  translate(0px,-5px)  skewX(1deg) ;
  }
  100% {
    -o-transform:  translate(0px,0px)  skewX(1deg) ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    -ms-transform:  translate(0px,0px)  skewX(0deg) ;
  }
  15% {
    -ms-transform:  translate(0px,-25px)  ;
  }
  30% {
    -ms-transform:  translate(0px,0px)  ;
  }
  45% {
    -ms-transform:  translate(0px,-15px)  skewX(1deg) ;
  }
  60% {
    -ms-transform:  translate(0px,0px)  skewX(1deg) ;
  }
  75% {
    -ms-transform:  translate(0px,-5px)  skewX(1deg) ;
  }
  100% {
    -ms-transform:  translate(0px,0px)  skewX(1deg) ;
  }
}
</style>

