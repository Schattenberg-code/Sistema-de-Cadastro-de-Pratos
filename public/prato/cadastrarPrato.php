<?php

include "../../infra/conexao.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$id_usuario = $_POST["id_usuario"];

echo $id_usuario;
exit;

$sql = "INSERT INTO pratos (nome,preco,descricao,categoria,id_usuario) VALUES (?,?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sdssi", $nome,$preco,$descricao,$categoria,$id_usuario);
$stmt->execute();

header("location: ../../index.php");

