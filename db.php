<?php
 $con = mysql_connect('localhost','root','');
  if($con)
  {
	  mysql_select_db('details',$con) or die ('database can not select');
	  
  }
  else
  {
	  echo'connect error';
  }
  ?>