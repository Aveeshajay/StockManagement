<!--if any requirment have any customer inform to us-->
<?php 

require('connect.php'); 

if (isset($_POST['subbtn'])) {

  $sql = "insert into contact(supplierName, email, telephone) values('" . $_POST['fName'] . "', '" . $_POST['Email'] . "', '" . $_POST['tNumber'] . "')";

  // echo $sql;
  // die();

  if ($conn->query($sql) == True) {
    echo 'saved';
    header('Location: home.php');

  } else {
    echo 'not saved';
  }

  die();
}


?>
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div class="Contact-form">
		<h1>Contact Us</h1>
			<form action="Contact.php" method="post">
			<div class="txtb">
				<label><h3>Full Name : </h3></label> 
				<input type="text" name="fName"  placeholder="Enter your Name">
			</div>

			<div class="txtb">
				<label><h3>Email : </h3></label> 
				<input type="email" name="Email"  placeholder="Enter your Email">
			</div>

			<div class="txtb">
				<label><h3>Telephone Number : </h3></label> 
				<input type="text" name="tNumber"  placeholder="Enter your Telephone Number">
			</div>

			<div class="txtb">
				<label><h3>Message : </h3></label> 
				<input type="text" name="message" placeholder="Enter some idea">
			</div>


			<div class="btn">
			<button class="button button3" value="Submit" name="subbtn"><h2>Send</h2></button>
			</div>

	</div>
		
</body>
</html>