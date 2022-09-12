<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<title>Connect</title>
</head>
<body>
<?php 
  $server="localhost";
  $user="root";
  $pass="";
  $database="web_laptop";
  $conn=mysqli_connect($server,$user,$pass,$database);
  mysqli_query($conn,'set name "utf8"');
?>
</body>
</html>