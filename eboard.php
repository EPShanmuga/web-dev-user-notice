<!DOCTYPE html>
<html>
<head>
<title>
NOTICE BOARD
</title>
<head>
<body style="background-color:rgb(61,177,255);font-size:30px;">
<center>

<h1 style="font-family:sylfaen;font-sixe:30px;"><u>NOTICE BOARD</u></h1>
<div style="border:4px solid black;">
<?php
// Create connection
$conn = new mysqli("localhost", "root", "","BulletinDB");
// Check connection
$sql = "SELECT News FROM Notice";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo $row["News"];
echo "<br><hr>";

}
 else 
    echo "No results";

$conn->close();
?>
</div>
<br>
<form action="try.php">
<input type="submit" style="background-color:black;font-family:sylfaen;font-size:30px;color:rgb(61,177,255);padding:10px 10px;" value="ADD NEW NOTICE">
</form>
</center>
</body>
</html>