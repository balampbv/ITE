 <html>
	<head>
	<title>Log-in</title>
	 <link rel="stylesheet" type="text/css" href="test.css"/> 
		 <link rel="stylesheet" type="text/css" href="button.css"/> 

	</head>	
<body class="padding" background="bg/5.png">
         
		<form  class="innershadow" name="login" action="orderlogin2.php" method="POST">
	<center>	<fieldset class="padding"> 
		<legend>Log-in</legend>
		<pre font-color:white;
		>
User name:- <input type="text" name="uname" required >


			
Password:- <input type="password" name="pwd" required>
		</pre></center><br>
<center><input type="submit" class="button button1"  style="vertical-align:middle" value="Log-in" name="login"><br><br>
<center><a href="forgot.php">Forgot password?</a></center><br><br><br></center>
<center>Doesn't have an account Click <a href="signup.html">here</a><br></center>
                        
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
html {
    font-family: "Lucida Sans", sans-serif;
}
body.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:35%;
padding-left:35%;
}
center{
color:#996699; }
a 
{ 
color:white;
text-decoration:none 
}

</style>