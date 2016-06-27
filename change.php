<html>
<head>
<title>
RESULT
</title>
</head>

<body style="background-color:rgb(255,51,102);font-size:25px;font-family:sylfaen;">
<center>
<?php
$conn = new mysqli("localhost", "root", "","BulletinDB");
$sql = "SELECT Name,UserName,Access FROM User";
$result = $conn->query($sql);
$var=1;
if ($result->num_rows > 0)
 // output data of each row
 while($row = $result->fetch_assoc()) 
 {
   echo "<br>".$var;
   echo "<b>"." Name: "."</b>" . $row["Name"]."<br>";
   echo "<b>"." Username: "."</b>".$row["UserName"]."<br>";
   //gives an option of changing access of non-admin users with a drop-down box while printing the present level
  if($row["Access"]!="admin")
  {
   $q=$row["Access"];
   $p=$row["UserName"];
   echo '<form action="change_action.php" method="get">
   <input type="hidden" value="'.$p.'" name="user">
   
   <b>Access:</b>
   <select name="change" style="background-color:rgb(255,51,102);font-size:25px;font-family:sylfaen;border:ipx solid black;">
    <option selected="selected">
    '.$q.'
    </option>
    <option value="admin">Admin</option>
    <option value="Editor">Editor</option>
    <option value="Viewer">Viewer</option>
   </select>
   <br>
   
   <input type="submit" value="change" style="background-color:rgb(255,51,102);font-size:25px;font-family:sylfaen;"></form>';
  }
  else
  //unchangeablbe access of admins
   echo "<b>"." Access: "."</b>".$row["Access"]."<br>";
  $var++;
 }
 else 
  echo "No results";
 $conn->close();
?>
</center>
</body>
</html>
