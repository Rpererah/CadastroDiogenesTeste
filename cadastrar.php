<?php
require_once("conexao.php");

$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

$query=$conexao->prepare("INSERT INTO usuario(usuario,senha)VALUES(?,?)");
$query->bindParam(1,$usuario);
$query->bindParam(2,$senha);

$query->execute();



?>