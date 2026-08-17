<?php

include "../../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];

$stmt = $conexao -> prepare(
    "UPDATE pratos
    SET nome = ?, preco = ?, descricao = ?, categoria = ?
    WHERE id = ?"
);

$stmt -> bind_param("sdssi", $nome, $preco, $descricao, $categoria, $id);
$stmt -> execute();

header("Location: ../../index.php");