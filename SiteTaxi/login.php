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

?>
</body>
</html>