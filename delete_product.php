<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['customer_id'])){
$sql = "DELETE FROM usernew WHERE  customer_id = ".$_GET['customer_id'];
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: admin_001.php");
}
?>