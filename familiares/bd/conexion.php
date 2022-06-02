<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	function OpenCon()
	 {
		 $dbhost = "localhost";
		 $dbuser = "root";
		 $dbpass = "";
		 $db = "familiares";
		 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Conexion fallida:\n". $conn -> error);
		 return $conn;
	 }
	 
	function CloseCon($conn)
	 {
	 	$conn -> close();
	 }
?>
</body>
</html>