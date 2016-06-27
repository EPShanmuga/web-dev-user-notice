<!DOCTYPE html>
<html>
<head>
<title>
ADD RESULT
</title>
</head>

<body style="background-color:rgb(255,51,102);">
  
<center>
<p style=";font-size:40px;font-family:sylfaen">
  <?php
  // Create connection
  $h="localhost";$d="BulletinDB";$r="root";$p="";
  $conn = new mysqli("localhost", "root", "", "BulletinDB");
  $dbh=new PDO("mysql:host=$h;dbname=$d", $r, $p);
  //writing new record
  $sql = $dbh->prepare("INSERT INTO User (Name,ID,Post,Email,UserName,Access,Password)
  VALUES (:a,:b,:c,:d,:e,:f,:g)");
  $sql->bindParam(':a',$_POST["name"]);
  $sql->bindParam(':b',$_POST["ID"]);
  $sql->bindParam(':c',$_POST["post"]);
  $sql->bindParam(':d',$_POST["mail"]);
  $sql->bindParam(':e',$_POST["username"]);
  $sql->bindParam(':f',$_POST["access"]);
  $sql->bindParam(':g',$_POST["password"]);
  $sql->execute();
  echo "You have registered successfully!";
  echo "Please login now";
  $conn->close();
  ?>
</p>
//leading to login page
<br>
<form action="login.php" id="form1"></form>
<button class="button" form="form1" style="background-color:black;font-size:35px;color:rgb(255,51,102);padding:20px 20px;font-family:sylfaen;"> LOGIN </button>
<br>
</body>
</html>
