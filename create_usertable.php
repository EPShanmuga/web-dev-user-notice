<?php
$conn=new mysqli("localhost","root","","BulletinDB");
$sql=" CREATE TABLE User(
Name varchar(30) NOT NULL,
UserName varchar(15) PRIMARY KEY,
Access varchar(10),
Email varchar(20),
Post varchar(20),
ID int CHECK(ID>100000000 AND ID<999999999),
Password varchar(20))";
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