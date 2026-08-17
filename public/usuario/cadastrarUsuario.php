<?php

include "../../infra/conexao.php";

$email = $_POST["email"];
$nome = $_POST["nome"];

if (!$email){
    header("location: ../../index.php");
    die("deu merda");
}

$sql = "INSERT INTO usuarios (email,nome) VALUES (?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ss", $email,$nome);
$stmt->execute();

header("location: ../../index.php");