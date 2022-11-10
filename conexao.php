<?php
$porta="localhost:8889";
$nomeDoBanco="teste2";
$usuarioBanco="root";
$senhaBanco="root";

$conexao=new PDO("mysql:host=$porta;dbname=$nomeDoBanco",$usuarioBanco,$senhaBanco);
?>