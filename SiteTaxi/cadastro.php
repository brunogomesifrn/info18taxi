<?php

$vnome=$_POST["nome"];
$vsobrenome=$_POST["sobrenome"];
$vnascimento=$_POST["nascimento"];
$vcpf=$_POST["cpf"];
$vrua=$_POST["rua"];
$vnumero=$_POST["numero"];
$vbairro=$_POST["bairro"];
$vestado=$_POST["estado"];
$vcidade=$_POST["cidade"];
$vcep=$_POST["cep"];
$vemail=$_POST["email"];
$vlogin=$_POST["login"];
$vpass=$_POST["pass"];
$vpassconfirm=$_POST["passconfirm"];

echo "Nome: ".$vnome."<br/>Sobrenome: ".$vsobrenome."<br/>";
echo "Nascimento: ".$vnascimento."<br/>cpf: ".$vcpf."<br/>";
echo "Rua: ".$vrua."<br/>Numero: ".$vnumero."<br/>";
echo "Bairro: ".$vbairro."<br/>Estado: ".$vestado."<br/>";
echo "Cidade: ".$vcidade."<br/>CEP: ".$vcep."<br/>";
echo "Email: ".$vemail."<br/>Login: ".$vlogin."<br/>";
echo "Pass: ".$vpass."<br/>Comfirmar Senha: ".$vpassconfirm."<br/>";

?>