<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['purchase_id'])){
$sql = "DELETE FROM purchase WHERE  purchase_id = ".$_GET['purchase_id'];
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