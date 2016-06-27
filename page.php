<!DOCTYPE html>
<html>
<body>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "BulletinDB");
$sql = "SELECT Name,ID,Post,Email,UserName,Access,Password FROM User";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
if($_POST["username"]==$row["UserName"]){echo $row["UserName"];echo "!";
break;}
}
}
$conn->close();
echo "<form action ='board.php'><input type='submit' value='NOTICE BOARD'></form>";
//echo $_POST["username"];
//echo $row["UserName"];
//if($row["Access"]=='admin') echo "<form action ='change.php'><input type='submit' value='CHANGE ACCESS'></form>";
?>
</body>
</html>