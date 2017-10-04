<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "testDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

//Pull table name from form
$table = $_POST["Table"];
echo $table . "<br>";


//Example SELECT Query
$sql = "SELECT Customer_id, First_name, Last_name FROM " . $table;
$result = $conn->query($sql);

$num_rows = $result->num_rows;

for ($x = 0; $x < $num_rows; $x++) {
    $row = $result->fetch_assoc();
    echo "ID: " . $row["Customer_id"] . " - Name: " . $row["First_name"] . " " . $row["Last_name"]. "<br>";
} 

mysqli_close($conn);

?>

<form action="index.html" method="get">
    <input type="submit" value="Back">
</form>

</body>
</html>