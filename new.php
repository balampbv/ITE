
<html>
<head>
<title>Greek Factory</title>
 <link rel="stylesheet" type="text/css" href="animation.css"/> 
 <link rel="stylesheet" type="text/css" href="button.css"/> 
</head>
<?php 
session_start();
?>
<body class="padding" background="bg/3.jpg">
<div id="header">
<h3>Greek Factory</h3>
</div>
<frameset rows="64,*,64">
<frame name="top" src="js1.php">
<frameset cols="150,*">
<frame name="main" src="welcome.php">
<frame name="side1" src="nav.php">
</frameset>
<frame name="bottom" scrolling="no" noresize src="">
</frameset>
</body>
</html>
<style type="text/css">
div#header 
   {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding:2%;
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
background-color:663366;
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

.leftcontent
{
float:left;
width:300px;
height:50;
background-color:;
margin:5px;
}
.left
{
width:200px;
float:left;
}
.right
{
width:200px;
float:right;
}
.main
{
margin-left:200px;
margin-right:200px}

</style>

