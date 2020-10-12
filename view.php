<!--retrive all inserted data of registered customers-->
<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM usernew";
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
	<p><b><i><u>Customer Details</u></i></b></p>
	<table border=1 padding=00px align ="center" bgcolor="yellow">
		<tr bgcolor=#4CAF50 >
			<td>customer ID</td>
			<td>First name</td>
			<td>Last Name</td>
			<td>Username</td>
			<td>Password</td>
			
			
			
			<td>update</td>
			<td>delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['customer_id'] ?></td>
			<td><?php echo $row['fName'] ?></td>
			<td><?php echo $row['lName'] ?></td>
			<td><?php echo $row['userName'] ?></td>
			<td><?php echo $row['password'] ?></td>	
	
			<?php echo "<td><a href ='update_product.php?customer_id=".$row['customer_id']."' > update </a> </td>"?>
			<?php echo "<td><a href ='delete_product.php?customer_id=".$row['customer_id']."' > delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>	
			

	
</body>
</html>

