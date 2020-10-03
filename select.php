<?php require_once('connect.php'); ?>
<?php

$query = "SELECT * FROM supplier";

$result_set = mysqli_query($connect, $query);

	if ($result_set) { 

	echo mysqli_num_rows($result_set); . "<hr>"
	$record = mysqli_fetch_assoc($result_set);


	$table = '<table>';
	$table = '<tr><th>'First name</th><th>last name</th><th>Email</th><th>

	while ($record = mysqli_fetch_assoc($result_set)) {
			echo $record['first_name'] . "<br>";
	}
	$table = {}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Display data</title>
	<style>
		table { border-collapse: collapse;  }
		td, th {border: 1px solid black; padding: 10px; }
	</style>
</head>
<body>
	<?php echo $table; ?>
</body>
</html>

<?php mysql_close($connect); ?>