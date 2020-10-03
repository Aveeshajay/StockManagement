<?php


$sql = "SELECT * from usernew";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["fName"]. " " . $row["lName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>