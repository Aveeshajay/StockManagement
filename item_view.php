<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM purchase";
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
	<p><b><i><u>Ordered items Details</u></i></b></p>
	<table border=1 padding=00px align ="center" bgcolor="white">
		<tr bgcolor=#4CAF50 >
			<td>Purchase ID</td>
			<td>Amount (Kg)</td>
			<td>Telephone</td>
			<td>Address</td>
			
			
			
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['purchase_id'] ?></td>
			<td><?php echo $row['amount'] ?></td>
			<td><?php echo $row['telephone'] ?></td>
			<td><?php echo $row['address'] ?></td>
			
	
			<?php echo "<td><a href ='update_product.php?purchase_id=".$row['purchase_id']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delete_item.php?purchase_id=".$row['purchase_id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>