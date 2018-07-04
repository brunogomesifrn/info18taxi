<!DOCTYPE html>
<html>
<head>
	<title>Criar conta php</title>
</head>
<body>



<?php

$vnome=$_POST["nome"];
$vdia=$_POST["dia"];
$vmes=$_POST["mes"];
$vano=$_POST["ano"];
$vrg=$_POST["rg"];
$vcpf=$_POST["cpf"];

$vrua=$_POST["rua"];
$vbairro=$_POST["bairro"];
$vestado=$_POST["estado"];
$vcidade=$_POST["cidade"];

$vemail=$_POST["email"];
$vlogin=$_POST["login"];
$vpass=$_POST["pass"];
$vpassconfirm=$_POST["passconfirm"];

echo "Nome: ".$vnome."<br/>";
echo "Nascimento: ".$vdia."/".$vmes."/".$vano."<br/>"; 
echo "CPF: ".$vcpf."<br/>";
echo "Rua: ".$vrua."<br/>";
echo "Bairro: ".$vbairro."<br/>";
echo "Estado: ".$vestado."<br/>";
echo "Cidade: ".$vcidade."<br/>";
echo "Email: ".$vemail."<br/>"; 
echo "Login: ".$vlogin."<br/>";
echo "Senha: ".$vpass."<br/>"; 
echo "Comfirmar Senha: ".$vpassconfirm."<br/>";

?>
	
</body>
</html>
