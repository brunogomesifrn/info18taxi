<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>

<?php
$usu = $_POST['username'];
$pass =  $_POST['pass'];

if (($usu == "admin")&&($pass == "123")) {
	echo "Logado";
}else{
	echo "vai tomar no cu";
}
?>
</body>
</html>