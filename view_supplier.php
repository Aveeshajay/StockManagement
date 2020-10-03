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
			<td>Supplier Address</td>
			<td>Email</td>
			
			
			
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['sname'] ?></td>
			<td><?php echo $row['iname'] ?></td>
			<td><?php echo $row['Address'] ?></td>
			<td><?php echo $row['email'] ?></td>
			
	
			<?php echo "<td><a href ='update_product.php?sname=".$row['sname']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delete_product.php?sname=".$row['sname']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>

