<?php 

require('connection.php'); 

if (isset($_POST['savBtn'])) {

  $sql = "insert into user(username, password) values('" . $_POST['username'] . "', '" . $_POST['password'] . "')";
  //echo $sql;

  if ($conn->query($sql) == True) {
    echo 'saved';
    header('Location: login.php');

  } else {
    echo 'not saved';
  }

  die();
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>sample</title>
</head>
<body>
	<form action="login.php" method="post">
		<p>enter your name</p><br>
		<input type="text" name="username"><br>
		<p>enter your password</p><br>
		<input type="numbers" name="password"><br>
		<input type="submit" value="Register" name="savBtn">
			</form>
</body>
</html>