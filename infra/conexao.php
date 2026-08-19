<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_cadastrar_pratos_fixluc";
$conexao = new mysqli($host,$user,$pass,$db,6608);

if($conexao->connect_error){
    die("Erro na conexão");
}
?>