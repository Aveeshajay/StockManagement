<!--Insert all data that  of new customers need to documentation-->
<?php 

require('connect.php'); 

if (isset($_POST['saveBtn'])) {

  $sql = "insert into usernew(fName, lName, userName, password) values('" . $_POST['fName'] . "', '" . $_POST['lName'] . "', '" . $_POST['userName'] . "', '" . $_POST['password'] . "')";
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

  <title>Register page</title>
  <link rel="stylesheet" type="text/css" href="register.css">

</head>

<body>

    <div class="wrap">
        <h2><u>Register Here</h2></u>
           <form action="signup.php" method="post">
              <input type="text" placeholder="First name" name="fName">
              <input type="text" placeholder="Last name" name="lName">
              <input type="text" placeholder="Email" name="email">
              <input type="text" placeholder="Username" name="username">
              <input type="password" placeholder="Password" name="password">
              <input type="password" placeholder="Re-enter password" name="repassword">

              <p><span><input type="checkbox"></span>I agree to the terms of  services.</p>
              <input type="submit" value="Register" name="saveBtn">
          </form>
    </div>
    
    

</body>
