<?php 

require('connect.php'); 

if (isset($_POST['btn'])) {

  $sql = "insert into item(item_name, item_supplier, item_code) values('" . $_POST['sname'] . "', '" . $_POST['address'] . "', '" . $_POST['category'] . "')";
  //echo $sql;

  if ($conn->query($sql) == True) {
    echo 'saved';
   // header('Location: customer.php');

  } else {
    echo 'not saved';
  }

  die();
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Item page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Items.css">
 </head>

<body>
        
        <div class="item">
        <h2>Add A New Item</h2>
           <form action="Items.php" method="post">

                      

            <div class="txtb">
              <p><h3>Item Name</h3></p><br>
              <input type="text" placeholder="First name" name="sname"><br>
            </div>

            <div class="txtb">
              <p><h3>Item Code</h3></p><br>
              <input type="text" placeholder="Category" name="category"><br>
            </div>

            <div class="txtb">
              <p><h3>Supplier</h3></p><br>
              <input type="text" placeholder="Address" name="address"><br>
            </div>
            
            <div class="btn"> 
              <input type="submit" value="Add Item" name="btn">
            </div>

          </form>
    </div>

</body>
</html>
<?php include 'view_additem.php';?>