<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP & MySQL Connection</title>
</head>
<body>
  <h2>PHP & MySQL Connection</h2>
<?php
$StID = $_POST['Studentid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$servername = "localhost";
$username = "client";
$password = "client1";
$dbname = "schtest";

 $dbc = mysqli_connect($servername, $username, $password, $dbname)
 or die('Error connecting to MySQL server.');
 $query = "INSERT INTO names (Student_ID, firstname, lastname) VALUES ('$StID', '$firstname', '$lastname')";
 $result = mysqli_query($dbc, $query)
 or die('Error querying database.');
 
 echo "Done!";
 mysqli_close($dbc);
?>
</body>
</html>
