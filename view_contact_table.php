<!--retrive all requirment of receive from customer-->
<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM contact";
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
	<p><b><i><u>Contact Details</u></i></b></p>
	<table border=1 padding=00px align ="center" bgcolor="white">
		<tr bgcolor=#4CAF50>
			<td>Contact ID</td>
			<td>Supplier Name</td>
			<td>E-mail</td>
			<td>Telephone</td>
			<td>Comment</td>
			
			
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['Contact_id'] ?></td>
			<td><?php echo $row['suppliername'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['telephone'] ?></td>
			<td><?php echo $row['comment'] ?></td>
	
			<?php echo "<td><a href ='update_product.php?Contact_id=".$row['Contact_id']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delet_contact.php?Contact_id=".$row['Contact_id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
			

	
</body>
</html>

