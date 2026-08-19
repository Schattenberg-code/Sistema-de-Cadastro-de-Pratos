<?php

include "../../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];

if ($preco < 0){
    echo "<script>
        alert('Erro no cadastro: o preço precisa ser valido');
        window.location.href = '../../index.php';
    </script>";
    die();
}

if (!$nome) {
    echo "<script>
        alert('Erro no cadastro: o nome é obrigatório!');
        window.location.href = '../../index.php';
    </script>";
    die();
}
if (!$preco){
    echo "<script>
        alert('Erro no cadastro: o preço é obrigatório');
        window.location.href = '../../index.php';
    </script>";
    die();
}
if (!$categoria){
    echo "<script>
        alert('Erro no cadastro: a categoria é obrigatório!');
        window.location.href = '../../index.php';
    </script>";
    die();
}

$stmt = $conexao -> prepare(
    "UPDATE pratos
    SET nome = ?, preco = ?, descricao = ?, categoria = ?
    WHERE id = ?"
);

$stmt -> bind_param("sdssi", $nome, $preco, $descricao, $categoria, $id);
$stmt -> execute();

header("Location: ../../index.php");