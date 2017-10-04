<!DOCTYPE html>
<html>
<body>

<style>
table, th, td {
    border: 1px solid black;
}
</style>

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

//Pull form fields
$select = $_POST["Select"];
$table = $_POST["Table"];
$where = $_POST["Where"];
echo "Table: " . $table . "<br>";


//Run Query
if($where === "")
{
    $sql = "SELECT " . $select . " FROM " . $table;
}
else
{
    $sql = "SELECT " . $select . " FROM " . $table . " WHERE " . $where;
}
$result = $conn->query($sql);

$num_rows = $result->num_rows;

$first_row = $result->fetch_assoc();
$columns = array_keys($first_row);

echo "<table><tr>";
for($c = 0; $c < count($columns); $c++) {
    echo "<th>" . $columns[$c] . "</th>";
}
echo "</tr>";

// Rerun query to reset the row fetching
$result = $conn->query($sql);

for ($x = 0; $x < $num_rows; $x++) {
    $row = $result->fetch_assoc();
    echo "<tr>";
    for ($c = 0; $c < count($columns); $c++) {
        echo "<td>" . $row[$columns[$c]] . "</td>";
    }
    echo "</tr>";
} 

echo "</table>";

mysqli_close($conn);

?>

<form action="index.html" method="get">
    <input type="submit" value="Back">
</form>

</body>
</html>