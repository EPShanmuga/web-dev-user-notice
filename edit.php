<!DOCTYPE html>
<html>
<head>
<title>
EDIT PAGE
</title>
</head>
<body style="background-color:rgb(255,102,51);font-size:30px;font-family:sylfaen;">
<center>
<h1 style="background-color:rgb(255,102,51);font-size:40px;font-family:sylfaen;">
<p style=";font-size:35px;font-family:sylfaen">OLD NEWS</p>
<?php
$a= $_GET['user'];
echo $a;
echo '<p style=";font-size:35px;font-family:sylfaen">NEW NEWS</p>';
echo '<form action="edit_action.php" method="get">
<input type="hidden" name="old" value="'.$a.'" >
<input type="text" style="background-color:rgb(255,102,51);font-size:30px;font-family:sylfaen;" name="new" value="'.$a.'" ><br><br>
<input type="submit" style="background-color:black;color:rgb(255,102,51);font-size:30px;font-family:sylfaen;padding:10px 10px;" value="edit"></form>';
?>
</body>
</html>