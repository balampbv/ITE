 
<html>
	<head><title>Staff-Sign-Up</title>
	 <link rel="stylesheet" type="text/css" href="test1.css"/> 
	</head>
<!marquee direction=right scrollamount=10 The Greek Factory :)></marquee>

<body class="padding" background="bg/03.jpg">
	<form action="staffinsert.php.php" method="POST">
		<!center><div class="darkshadow"><fieldset  class="padding">
		<!center><legend>Staff-Sign-Up</legend></center>
		<pre>
	First Name               :<input type="text" name="fname" placeholder="Ex:Bala" required autofocus size="20" autocomplete="off">

	Last Name                :<input type="text" name="lname" required placeholder="Ex:Sekar" autocomplete="off">
			
	Age			 :<input type="text" name="age" required placeholder="Age" size="4">

	Gender                   :<input type="radio" name="gen" value="male">MALE<input type="radio" name="gen" value="female">Female<input type="radio" name="gen" value="other">Others
	
	
	
	Date of Birth            :<select name="dateb" val=" ">
								<option value=""></option>
						<?php
				        for($i=1;$i<=30;$i++)
						{
						?>
						<option><?php echo "$i";?></option>	
						<?php
       					}
						?>
						</select><select name="monthb" val=" ">
				<option>  </option>	<option value="January">January</option><option value="Feburary" >Feburary</option><option value="March" >March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option>




						</select><select name="yearb" val=" ">
								<option value=""></option>
						<?php
				        for($i=1950;$i<=2016;$i++)
						{
						?>
						<option ><?php echo "$i";?></option>	
						<?php
       					}
						?>
						</select>
	
	Date of Joining          :<input type="date" name="doj" required  size="4">

						
	Designation              :<select name="design">
						<center><option>-----------------Select-------------</center></option>
						<option value="Food & Beverage Manager">Food & Beverage Manager</option>
						<option value="Supervisor">Supervisor</option>
						<option value="2nd Supervisor">2nd Supervisor</option>
						<option value="Waiter">Waiter</option>
						<option value="Head chef">Head chef</option>
						<option value="Asst Head chef">Asst Head chef</option>
						<option value="Head Cook">Head Cook</option>
						<option value="Asst Head Cook">Asst Head Cook</option>
						<option value="South Indian Cook">South Indian Cook</option>
						<option value="All Rounder Cook">All Rounder Cook</option>
						<option value="Kitchen Helper">Kitchen Helper</option>
						<option value="Utilities">Utilities</option>
						<option value="Chinese Cook">Chinese Cook</option>
						<option value="Indian Cook">Indian Cook</option>
						<option value="Tandoor Cook">Tandoor Cook</option>
						<option value="Cashier">Cashier</option>
						<option value="Food Delivery Boy">Food Delivery Boy</option>
						
						</select>
	
	
	Email Id		 :<input type="email" name="mailid" required placeholder="E-mail id!!!" autocomplete="off">
			
	User Name		 :<input type="text" name="uname" required autocomplete="off">
			
	Password		 :<input type="password" name="pwd" required autocomplete="off">

	Mobile No                :<input type="text" name="mnum"  required placeholder="Ex:987654321" autocomplete="off">

	State			 :<input type="text" name="state"  required placeholder="Ex:Tamil Nadu" autocomplete="off">

	City                     :<input type="text" name="city"  required  placeholder="Ex:Madurai" autocomplete="off">

			
				
					<center><input  type="submit" name="sub1" value="Sign-up">   <input type="reset" name=re value="Reset"></center><div>
                                  <left>Already have an Account the click <a href="stafflogin.php">here</a></left>
			</pre>
  			
		</fieldset></center></div>
	</form>
<!marquee direction="left" scrollamount=10 Have a Nice day :)></marquee>
</body>

</html>
<?php
echo "i'm here";
?>
<style type="text/css">
p.one 
{
border-style:solid;
border-width:5px;
}
fieldset.two 
{
border-style:outset;
border-width:7	px ;
}
p.three
{
border-style:solid;
border-width:1px;
}
fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:15%;
padding-left:-5px;
border-style:outset;
border-width:5px ;

}
body.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:55%;
padding-left:25%;
}
button.rounded-corners
{
  background-color:lightgrey;
  width:250px;
  height:125px;
  padding:10px;

  border-radius: 10px 10px 10px 10px;
  -ms-border-radius: 10px 10px 10px 10px;
  -moz-border-radius: 10px 10px 10px 10px;
  -webkit-border-radius: 10px 10px 10px 10px;
  -khtml-border-radius: 10px 10px 10px 10px;
}
;;;

</style>
 