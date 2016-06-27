<!DOCTYPE html>
<html>
<head>
<title>
RESULT
</title>
</head>
<body style="background-color:rgb(204,51,255);font-size:40px;font-family:sylfaen;">
<center>
<p>
<?php
// Create connection
//echo $_POST[news];
$a=$_GET['news'];
$conn = new mysqli("localhost", "root", "", "BulletinDB");
$sql = "INSERT INTO Notice(News)
VALUES ('$a')";

if ($conn->query($sql) === TRUE) {
    echo "News piece added!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</p>
</center>
</body>
</html>