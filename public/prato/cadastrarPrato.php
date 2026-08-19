<?php

include "../../infra/conexao.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];

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

$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
if (!$categoria){
    echo "<script>
        alert('Erro no cadastro: a categoria é obrigatório!');
        window.location.href = '../../index.php';
    </script>";
    die();
}
$id_usuario = $_POST["id_usuario"];

$sql = "INSERT INTO pratos (nome,preco,descricao,categoria,id_usuario) VALUES (?,?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sdssi", $nome,$preco,$descricao,$categoria,$id_usuario);
$stmt->execute();

header("location: ../../index.php");

