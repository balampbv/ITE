<html>
<head>
<title>My Profile</title>      <script type="text/javascript" src="jquery-1.3.2.js"></script>

</head>

<?php 
session_start();
?>
<?php
$u=$_SESSION['uname'];
$p=$_SESSION['pwd'];
?>

<body background="bg/22.jpg">
<div>
<center>
<ul class="horizontalul">
   <li class="leftli"><a class="active" href="home2.php">Home</a></li>
   <!li><!a href="profile.php"My Account</a></li>
   <li class="leftli"><a href="Menu2.php">Menu</a></li>
   <li class="leftli"><a href="gallery2.php">Gallery</a></li>
   <li class="leftli"><a href="order2.php">Order Online</a></li>
   <li class="leftli"><a href="contact2.php">Contact</a></li>
   <li class="leftli"><a href="about2.php">About us</a></li>
</ul> 
</center>

</div>
<div class="navigation transparent" id="tool">
<ol class="verticalul" >
 <li class="centerli" id="nav"><a href="update.php">&nbsp;&nbsp;Update&nbsp;&nbsp;</a></li>
 <li class="centerli" id="nav"><a href="deactivate.php">Deactivate</a></li>
 </ol>
</div>
<!a href="deactivate.php"></a>





<!pre>
<!div>
<!form name="ff" method="POST" action="deactivate.php">
<!input type="submit" value="Deactivate" name="delete" >
<!/form>
<!form name="ff" method="POST" action="update.php">
<!input type="submit" value="Update" name="update"><br><br>
<!/div>
<!/pre>
</html>
<style type="text/css">
div#header {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 1;
	}
.horizontalul
{
list-style-type:none;
margin: 0;
padding :0;
overflow:hidden;
  background-color: darkgoldenrod;
  position:none;
top:0%;
width:100%%
}

.leftli
{
float:left;
}

li:last-child
{
float:left;
border-right:none;
}
li a
{
display:block;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;
}
li a:hover
{
background-color:FFCC66;
}
.verticalul
{
list-style-type:none;
margin: 0;
padding :0;
overflow:hidden;
background-color:goldenrod;
position:none;
top:0%;
width:7%;
text-decoration:none;
}
.centerli
{
float:left;
border-right: 1px  solid #bbb;
}
li a:hover
{
background-color:FFDD55;
}
li a
{
display:block;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;
}
li:last-child
{
float:left;
border-right:none;
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
a { text-decoration:none }
span{
                position:absolute;
                color:#888;
                font-weight:bold;
                font-size:26px;
                margin:10px 0px 0px 140px;
                font-family: Arial;
    }
</style>
 <script type="text/javascript">
            $(function() {
                $('#tool').hover(
                function () {
                    $('#tlbar').slideDown(200);
                    $('#nav').slideDown(200);
                },
                function () {
                    $('#tlbar').slideUp(200);
                    $('#nav').slideUp(200);
                }
            );
                $('#tlbar,#nav').hover(
                function () {
                    $(this).removeClass('transparent');
                },
                function () {
                    $(this).addClass('transparent');
                }
            );
            });
        </script>
    

 
