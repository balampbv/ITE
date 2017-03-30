 <html>
	<head>
	<script type="text/javascript">
function show_confirm()
{

var r=documents.form["login"]["npwd1"].value;
var r=documents.form["login"]["npwd2"].value;

if (!(r==s))
  {
  alert("Please Enter same Password!");
  return false;
  }
else
return true; 
}
</script>

	<title>Forgot Password</title>
	 <!link rel="stylesheet" type="text/css" href="test.css"/> 
	</head>	
<body class="padding" background="bg/6.jpg" fontcolor="white">
         
		<form  class="lightshadow" name="login" action="forgot1.php" method="POST">
	<center>	<fieldset class="padding"> 
		<legend>Password</legend>
		<pre 
		>
User name:-        <input type="text" name="uname" required >
				
New Password:-     <input type="password" name="npwd1" required >
	
Confirm Password:- <input type="password" name="npwd2" required>
		</pre></center><br>
<center><input type="submit"  value="Confirm" name="login"></fieldset></form><br><br><form action="login.html"><input type="submit" value=" Cancel " name="login"></form></center>


                        
		
	
		

</body>
<style type="text/css">
.lightshadow
{  
   background-color: #3f3ff;
   width: 350px;
   padding: 10px;
   color:white;
   fontcolor:white;
   height: 150px;
   box-shadow: 4px 2px 1px #fff;
   -webkit-box-shadow: 4px 4px 2px #fff;
   -moz-box-shadow: 4px 4px 2px #fff666;
} 
fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:10%;
padding-left:-5px;
border-style:outset;
border-width:5px ;

}
body.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:35%;
padding-left:35%;
}


a { text-decoration:none }
center{
color:#996699; }
a 
{ 
color:white;
text-decoration:none 
}

</style>