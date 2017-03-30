 <html>
	<head>
	<title>Log-in</title>
	 <link rel="stylesheet" type="text/css" href="test.css"/> 
	</head>	
<body class="padding" background="bg/5.png">
         
		<form  class="innershadow" name="login" action="stafflogin1.php" method="POST">
	<center>	<fieldset class="padding"> 
		<legend>Staff-Log-in</legend>
		<pre>
User name:- <input type="text" name="uname" required >


			
Password:- <input type="password" name="pwd" required>
		</pre></center><br>
<center><input type="submit" value="Log-in" name="login"><br><br>
<center><a href="forgot.php">Forgot password?</a></center><br><br><br></center>
<center>Doesn't have an account Click <a href="staffsign.php">here</a><br></center>
                        
		</fieldset>
</form>

</body>
<style type="text/css">

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
a 
{ 
text-decoration:none 
}
center{
color:#996699; }
a 
{ 
color:white;
text-decoration:none 
}

</style>