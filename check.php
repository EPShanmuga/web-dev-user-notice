<!DOCTYPE html>
<html>
<head>
<title>
USER PAGE
</title>
</head>
<body style="background-color:rgb(177,255,61); font-size:30px;font-family:sylfaen;">
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "BulletinDB");
// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
} 
$flag=0;
$sql = "SELECT Name,ID,Post,Email,UserName,Access,Password FROM User";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
if($_POST["username"]==$row["UserName"])
{
if($_POST["password"]==$row["Password"]){//echo "yes password";
$flag=1;
break;}}
}
}
$conn->close();
$c=$_POST["username"];
if(!$flag)echo("WRONG USERNAME OR PASSWORD");
else
{
echo '<center><h1>PROCEED TO...?</h!?</center>';
if($row['Access']=='Viewer')
echo "<form action='vboard.php' method='post'><input type='submit' value='NOTICE BOARD' style='background-color:black;color:rgb(177,255,61);font-family:sylfaen;font-size:25px;padding:15px 15px;'></form>";
if($row['Access']=='admin'||$row['Access']=='Admin')
{echo "<form action='aboard.php' method='post'><input type='submit' value='NOTICE BOARD' style='background-color:black;color:rgb(177,255,61);font-family:sylfaen;font-size:25px;padding:15px 15px;'></form>";
echo "<form action='change.php' method='post'><input type='submit' style='background-color:black;color:rgb(177,255,61);font-family:sylfaen;font-size:25px;padding:15px 15px;' value='CHANGE ACCESS'></form>";
}
if($row['Access']=='Editor')
echo "<form action='eboard.php' method='post'><input type='submit' style='background-color:black;color:rgb(177,255,61);font-family:sylfaen;font-size:25px;padding:15px 15px;' value='NOTICE BOARD'></form>";}

?>

</body>
</html>