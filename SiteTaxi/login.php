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


<?php
$usu = $_POST['username'];
$pass =  $_POST['pass'];

if (($usu == "admin")&&($pass == "123")) {
	echo "Logado";
}else{
	echo "Você errou algum dado!";
}

</body>
</html>