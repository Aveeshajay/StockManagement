<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['item_id'])){
$sql = "DELETE FROM item WHERE  item_id = ".$_GET['item_id'];
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