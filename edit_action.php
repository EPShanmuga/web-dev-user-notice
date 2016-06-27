<html>
<head>
<title>
RESULT
</title>
</head>
<body style="background-color:rgb(255,51,102);">
<center>
<p style=";font-size:40px;font-family:sylfaen">
<?php
$a= $_GET['old'];
$b= $_GET['new'];
$conn = new mysqli("localhost", "root", "", "BulletinDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE Notice SET News='$b' WHERE News='$a'";
if ($conn->query($sql) === TRUE) {
    echo "News Piece edited successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
</p>
</center>
</body>
</html>