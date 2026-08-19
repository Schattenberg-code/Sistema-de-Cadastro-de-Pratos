<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_cadastrar_pratos_fixluc";
$conexao = new mysqli($host,$user,$pass,$db,);

if($conexao->connect_error){
    die("Erro na conexão");
}
?>