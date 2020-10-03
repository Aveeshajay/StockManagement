<?php 

require('connect.php'); 

if (isset($_POST['btn'])) {

 $sql = "insert into supplier(supplierName, Item, address, Email, Telephone, comment) values('" . $_POST['sname'] . "', '" . $_POST['iname'] . "', '" . $_POST['Address'] . "', '" . $_POST['email'] . "', '" . $_POST['tnumber'] . "', '" . $_POST['comment'] . "')";
  //echo $sql;

  if ($conn->query($sql) == True) {
    echo 'saved';
    header('Location: customer.php');

  } else {
    echo 'not saved';
  }

  die();
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Add supplier page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="supplier.css">
 </head>

<body>
        
        <div class="supplier">
        <h2>Add A New Supplier</h2>
           <form action="suppliers.php" method="post">
            <div class="txtb">
              <p><h3>New Customer Name</h3></p><br>
              <input type="text" placeholder="First name" name="sname"><br>
            </div>

             <div class="txtb">
              <p><h3>Item</h3></p><br>
              <input type="text" placeholder="Category" name="category"><br>
            </div>

            <div class="txtb">
              <p><h3>Address of New Customer</h3></p><br>
              <input type="text" placeholder="Address" name="Address"><br>
            </div>

            <div class="txtb">
              <p><h3>Email</h3></p><br>
              <input type="email" placeholder="Email" name="email"><br>
            </div>

            <div class="txtb">
              <p><h3>Telephone</h3></p><br>
              <input type="varchar" placeholder="Telephone Number" name="tnumber"><br>
            </div>
            
            <div class="btn"> 
              <input type="submit" value="Add Supplier" name="btn">
            </div>

          </form>

    </div>

</body>
<?php include 'view_supplier_table.php';?><br><br>
</html>
