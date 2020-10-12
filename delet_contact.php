<!--Delete unwanted customet contact messages-->
<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['Contact_id'])){
$sql = "DELETE FROM contact WHERE  Contact_id = ".$_GET['Contact_id'];
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