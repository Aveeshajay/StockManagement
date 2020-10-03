<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['supplier_id'])){
$sql = "DELETE FROM supplier WHERE  supplier_id = ".$_GET['supplier_id'];
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