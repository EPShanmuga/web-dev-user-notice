<!DOCTYPE html>
<html>
<head>
<title>
NOTICE BOARD
</title>
<head>
<body style="background-color:rgb(61,177,255);font-size:30px;">
<center>
<h1 style="font-family:sylfaen;font-sixe:30px;">
  <u>
   NOTICE BOARD
  </u>
 </h1>
<div style="border:4px solid black;">
 <?php
// Create connection
  $conn = new mysqli("localhost", "root", "","BulletinDB");
// Check connection
   $sql = "SELECT News FROM Notice";
   $result = $conn->query($sql);
   if ($result->num_rows > 0)
// output data of each row along with delete and edit options
    while($row = $result->fetch_assoc()) 
    {
     $a=$row["News"];
     echo $row["News"];
     echo '<form action="del.php" method="get">
     <input type="hidden" name="user" value="'.$a.'">
     <input type="submit" style="background-color:black;color:rgb(61,177,255);font-size:20px;font-family:sylfaen;" value="DELETE">
     </form>
     <form action="edit.php" method="get">
     <input type="hidden" name="user" value="'.$a.'" >
     <input type="submit" style="background-color:black;color:rgb(61,177,255);font-size:20px;font-family:sylfaen;" value="EDIT">
     </form>
     <hr>';
    }
   else 
    echo "No results";
   $conn->close();
  ?>
 </div>
<br>
</center>
</body>
</html>
