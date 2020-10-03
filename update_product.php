<?php require_once('connect.php'); ?>
<?php

if(isset($_GET['customer_id'])){
$sql1 = "SELECT * FROM usernew WHERE customer_id =".$_GET['customer_id'];
$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo "failed";	
}

}

if(isset($_POST['updateB'])){

	$sql2 = "UPDATE usernew SET fName = '{$_POST['fName']}', lName = '{$_POST['lName']}', fName = '{$_POST['userName']}', password = '{$_POST['password']}' WHERE customer_id = {$_POST['customer_id']};";
$result2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM usernew WHERE customer_id =".$_POST['customer_id'];
$result3 = mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";
header("Refresh:1, URL=admin_001.php");

}
if(!isset($_GET['Product_ID'])&&!isset($_POST['updateB'])){

}


?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style>
	
	input{
	height:50px;
	font-size:25px;
	}
	
	</style>
	</head>
<body bgcolor = "green">
	<table style="font-size:50px;">
		<tr>
			<td>Customer ID</td>
			<td>First name</td>
			<td>last name</td>
			<td>User name</td>
			<td>Password</td>
		</tr>
		<form action='update_product.php' method ='POST'>
			<tr>
			<?php 
			echo "<td><input type = 'text' name='customer_id' required value ='".$row['customer_id']."' readonly></td>";
			echo "<td><input type = 'text' name='fName' required value ='".$row['fName']."'></td>";
			echo "<td><input type = 'text' name='lName' required value ='".$row['lName']."'></td>";
			echo "<td><input type = 'text' name='userName' required value ='".$row['userName']."' ></td>";
			echo "<td><input type = 'text' name='password' required value ='".$row['password']."'></td>";
			
			
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="admin_001.php"><button type="button">Back</button></a></td>
		</tr>
		</form>
	</table>

	
</body>
</html>