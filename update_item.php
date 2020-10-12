<?php require_once('connect.php'); ?>
<?php

if(isset($_GET['item_id'])){
$sql1 = "SELECT * FROM item WHERE item_id =".$_GET['item_id'];
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

	$sql2 = "UPDATE item SET item_name = '{$_POST['item_name']}', item_supplier = '{$_POST['item_supplier']}', item_code = '{$_POST['item_code']}' WHERE item_id = {$_POST['item_id']};";
$result2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM item WHERE item_id =".$_POST['item_id'];
$result3 = mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";
header("Refresh:1, URL=items.php");

}
if(!isset($_GET['item_id'])&&!isset($_POST['updateB'])){

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
			<td>Item id</td>
			<td>Item name</td>
			<td>Item suplier</td>
			<td>Item code</td>
			
		</tr>
		<form action='update_item.php' method ='POST'>
			<tr>
			<?php
			echo "<td><input type = 'text' name='item_id' required value ='".$row['item_id']."' readonly></td>"; 
			echo "<td><input type = 'text' name='item_name' required value ='".$row['item_name']."'></td>";
			echo "<td><input type = 'text' name='item_supplier' required value ='".$row['item_supplier']."'></td>";
			echo "<td><input type = 'text' name='item_code' required value ='".$row['item_code']."' ></td>";
			
			
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="items.php"><button type="button">Back</button></a></td>
		</tr>
		</form>
	</table>

	
</body>
</html>
