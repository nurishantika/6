<html>
<head>
	<title> Konektor </title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
} else {
	echo "<br> <center><h1> BUKU TAMU </h1> <br> <br>";
}
?>
</body>
</html>