<html>
<head><title>Special update</title></head>

<body>
<form action="home3.php" method="get">
<input type="submit" name="back" value="Home">
</form>
</body>
<?php

include('db.php');

if(isset($_POST['save']))
{
  $image_description=$_POST['description'];
  $cost=$_POST['cost'];
  //$variety=$_POST['variety'];
  $image=$_FILES['file']['name'];
  $image_size =$_FILES['file']['size'];
  $image_type =$_FILES['file']['type'];
  
  if($image_type =='image/jpeg' || $image_type == 'image/gif'  || $image_type =='image/png')
  {
	 //move image to folder
     $uploadfile = move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
     //insert to database
     $query= mysql_query("INSERT INTO men_special(item,name,size,cost,variety) values('$image','$image_description','$image_size','$cost','Special')");
	 if($uploadfile && $query)
     {
		 echo "<script>
alert('Item Uploaded Successfully');
</script>";

	 }	  
	 else if(!$uploadfile)
	 {
		 echo "<script>
alert('Uploading Problem');
</script>";}
	 else if(!$query)
	 {echo "<script>
alert('Item not Saved');
</script>";
	 }
  }
  else
  {
	  echo"Invalid File Type";
  }
}

?>




<html>
<head>
<title>Upload Image</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
Item Name :
   <input type="text" name="description">
Item Cost :
	<input type="text" name="cost">
Variety :
    <input type="text" name="variety" value="Special" disabled>
	
   File:
   <input type="file" name="file">
   <input type="submit" value="Upload Picture" name="save">
   </form>
   <table>
     <thead>
       <tr>
	      <th>ID</th>
		  <th>Item</th>
		  <th>File name</th>
		  <th>Item Name</th>
		  <th>Size</th>
		  <th>Cost</th>		  
		  <th>Variety</th>
		</tr>
	 </thead>	
		<tbody>
		        <?php
			      $query=mysql_query ("select * from men_special");
				  $i=1;
				  while($row=mysql_fetch_object($query))
					  {
					  
					  ?>
						<tr>
					     <td><?php echo $i;$i++?></td>
						 <td><img style="width:200px;height:200px;"src="<?php echo'upload/'.$row->item ?>"></td>
						 <td><?php echo $row->item?></td>
						 <td><?php echo $row->name ?></td>
						 <td><?php echo $row->size ?></td>
						 <td><?php echo $row->cost ?></td>
						 <td><?php echo $row->variety ?></td>
						 
						</tr>
				  <?php } ?>
				  </table>
				  <form name="index" method="GET">
				  <input type="text" name="idd" value="<?php echo $row->id ?>" action="delete.php" hidden >
				  
				  
			</body>
				  
		</html>