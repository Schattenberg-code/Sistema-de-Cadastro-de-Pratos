<?php

include "../../infra/conexao.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO pratos (nome,preco,descricao,categoria) VALUES (?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("siss", $nome,$preco,$descricao,$categoria);
$stmt->execute();

header("location: ../../index.php");

