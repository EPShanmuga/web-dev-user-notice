<?php
$conn=new mysqli("localhost","root","","BulletinDB");
$sql=" CREATE TABLE Notice(
News varchar(200))";
if ($conn->query($sql) === TRUE)
{
echo "Table created!";
} 
else 
{
echo "Error" . $conn->error;
}
$conn->close();
?>