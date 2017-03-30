
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Order Online</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<script type="text/javascript">

function popup(mylink,windowname)
{
if(!window.focus)
return true;
var href;
if(typeof(mylink)=='string')
href=mylink;
else
href=mylink.href;
window.open(href,windowname,'width=400,height=200,scrollbar=yes');
return false;
}
</script>
<script type="text/javascript">
function show_confirm()
{
var r=confirm("Press a button");
if (r==true)
  {
  alert("You pressed OK!");
  }
else
  {
  alert("You pressed Cancel!");
  }
}
</script> 

</style>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Open+Sans);
@import url(http://fonts.googleapis.com/css?family=Federo);

body {
    /* general styles */
    padding: 30px;
    font-family: 'Open Sans', sans-serif;
    background: #f1c40f;
    color: #fff;
}

.modal {
    /* some styles to position the modal at the center of the page */
    position: fixed;
    top: 50%;
    left: 50%;
    width: 350px;
    line-height: 300px;
    height: 200px;
    margin-left: -380px;
    margin-top: -100px;
    background-color: #f1c40f;
    text-align: ;
    border-radius: 5px;
  
    /* needed styles for the overlay */
    z-index: 10; /* keep on top of other elements on the page */
    box-shadow: 0 0 0 9999px rgba(0,0,0,0.5);
}

.content {
    margin: 30px;
}

h1 {
    font-family: 'Federo', sans-serif;
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

  </head>

  <body>

    
  <div class="modal"><!iframe src="login.html" scrollbar="yes" width="400px" height="300px"><!/iframe>
  <center>
  <a href="orderlogin.php" ><img src="bg/login.jpg" align="left"></img></center></a>


  </div>
  
  <div class="content">
      
      <center><h1>CEG's Restaurent</h1></center>
   <ul class="horizontalul">
   <li><a class="active" href="home.php">Home</a></li>
   <li><a href="Menu.php">Menu</a>
   <ul>
   <li ><a href="Menu.php">Specialities</li>
    <li ><a href="Menu.php">Snacks</li>
   <li ><a  href="Menu.php">Soups</li>
   <li ><a  href="Menu.php">Starters</li>
   <li ><a  href="Menu.php">Main Course</li>
   <li ><a  href="Menu.php">Desserts</li>
   <li ><a  href="Menu.php">Drinks</li>
   </ul>
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="order.php">Order Online</a></li>
   <li><a href="contact.php">Contact</a></li>
   <li><a href="about.php">About us</a></li>
	
</ul> 

      </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>
<style>

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
</style>

