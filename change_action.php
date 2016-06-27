<html>
<head>
<title>
RESULT
</title>
</head>
<body style="background-color:rgb(204,255,51);">
<center>
<p style=";font-size:40px;font-family:sylfaen">
<?php
$a= $_GET['user'];
$b= $_GET['change'];
$conn = new mysqli("localhost", "root", "", "BulletinDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE User SET Access='$b' WHERE UserName='$a'";

if ($conn->query($sql) === TRUE) {
    echo "Access changed successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
</p>
</body>
</html>