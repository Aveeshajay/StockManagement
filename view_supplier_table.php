<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM supplier";
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
			<td>Supplier ID</td>
			<td>Supplier name</td>
			<td>Supplier address</td>
			<td>Supplier email</td>
			<td>Telephone</td>
			<td>Comment</td>
			<td>Supplier Item</td>
			
			
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['supplier_id'] ?></td>
			<td><?php echo $row['supplierName'] ?></td>
			<td><?php echo $row['address'] ?></td>
			<td><?php echo $row['Email'] ?></td>
			<td><?php echo $row['Telephone'] ?></td>
			<td><?php echo $row['comment'] ?></td>
			<td><?php echo $row['Item'] ?></td>
	
			<?php echo "<td><a href ='update_product.php?supplier_id=".$row['supplier_id']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delete_supplier.php?supplier_id=".$row['supplier_id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>

