<?php
// Create connection
$conn = new mysqli("localhost", "root", "","BulletinDB");
// Check connection
$sql = "SELECT News FROM Notice";
$result = $conn->query($sql);
if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()) {

echo "<b>"."</b>" . $row["News"]."<br>";

}
 else 
    echo "No results";

$conn->close();
?>