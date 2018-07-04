<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<?php 
if(isset($_POST["username"]) || isset($_POST["pass"])) {
echo "<p>Alguma informação está em faltando.</p>";
}else{
$email = $_POST['username'];
$senha = $_POST['pass'];
}

<<<<<<< HEAD
=======
<?php
$usu = $_POST['username'];
$pass =  $_POST['pass'];

if (($usu == "admin")&&($pass == "123")) {
	echo "Logado";
}else{
	echo "Você errou algum dado!";
}
>>>>>>> 03aa78a3cfec6600eaedb119c611d122ef7938b9
?>
</body>
</html>