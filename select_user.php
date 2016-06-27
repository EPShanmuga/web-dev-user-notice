<?php
// Create connection
$conn = new mysqli("localhost", "root", "","BulletinDB");
// Check connection
$sql = "SELECT Name,ID,Post,Email,UserName,Access,Password FROM User";
$result = $conn->query($sql);
$var=1;
if ($result->num_rows > 0)
 
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<br>".$var."<br>";

echo "<b>"." Name: "."</b>" . $row["Name"]."<br>";
echo "<b>"." ID: "."</b>" . $row["ID"]."<br>";
echo "<b>"." Designation: "."</b>".$row["Post"]."<br>";
echo "<b>"." Email Address: "."</b>".$row["Email"]."<br>";
echo "<b>"." Username: "."</b>".$row["UserName"]."<br>";
echo "<b>"." Access: "."</b>".$row["Access"]."<br>";
echo "<b>"." Password: "."</b>".$row["Password"]."<br>";
$var++;
}
 else 
    echo "No results";

$conn->close();
?>