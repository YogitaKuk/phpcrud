<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "forms";
$password = "test12345";
$dbname = "forms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);
echo "<table border='1'>

<tr>

<th>First Name</th>

<th>Last Name</th>

<th>Email</th>

</tr>";
	while($row = $result->fetch_assoc())
{

echo "<tr>";

echo "<td>" .$row["firstname"] . "</td>";

echo "<td>" . $row["lastname"]. "</td>";

echo "<td>" . $row["email"]. "</td>";

echo "</tr>";

}

echo "</table>";

$conn->close();
?>
</body>
</html>
