<!--New item add to the database-->
<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM item";
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title></title>
	</head>
<body>
	<table border=1 padding=00px align ="center" bgcolor="white">
		<tr bgcolor=#4CAF50 >
			<td>New item ID</td>
			<td>Item name</td>
			<td>Item supplier</td>
			<td>Item code</td>
			
			
			
			
			<td>Update</td>
			<td>Delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['item_id'] ?></td>
			<td><?php echo $row['item_name'] ?></td>
			<td><?php echo $row['item_supplier'] ?></td>
			<td><?php echo $row['item_code'] ?></td>
			
	
			<?php echo "<td><a href ='update_newitem.php?item_id=".$row['item_id']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delete_additem.php?item_id=".$row['item_id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>

