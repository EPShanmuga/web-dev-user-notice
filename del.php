<!DOCTYPE html>
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
echo '<script> confirm("Do you want to delete?");</script>';
$a=$_GET["user"];
// Create connection
$conn = mysqli_connect("localhost", "root", "", "BulletinDB");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM Notice WHERE News = '$a'";

if (mysqli_query($conn, $sql)) {
    echo "News piece removed!";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</p>
</center>
</body>
</html>