<?php
		requre_once();

			$sql = "select FirstName ,LastName, Gender from Student.Marks where Sudent.StudentId = Marks.StudentId and Marks.SubjectCode = 'IS1109' order by LastName ASC";
			$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
		<table border="1">
			<tr>
				<th>Fname</th>
				<th>Lname</th>
				<th>Gender</th>
			</tr>
			<?php
				while ($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td> <?  = $row['fname']; ?></td>
					<td> <?  = $row['Lname']; ?></td>
					<td> <?  = $row['Gender']; ?></td>
				</tr>	
				}
		<?php }	?>
		</table>
		<? php $conn->close(); ?>		
</body>
</html>