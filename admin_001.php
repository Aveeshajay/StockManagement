<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="navbar">
		<div class="container">
			<div class="logo_div">
		<img src="image/admin.png" alt="" class="logo">
		</div>
		<div class="navbar_links">
			<ul class="menu">
				<li><a href="customer.php">Customer page</a></li>
				<li><a href="suppliers.php">Add suppliers</a></li>
				<li><a href="Items.php">Add Items</a></li>
				<li><a href="#">Stock report</a></li>
			</ul>
		</div>
		</div>
	</div>

	<?php include 'view.php';?><br><br>
	<?php include 'item_view.php';?><br><br>
	<?php include 'view_contact_table.php';?><br><br>
	
	


</body>
</html>