<?php

include "../../infra/conexao.php";

$email = $_POST["email"];
$nome = $_POST["nome"];

if (!$email){
    echo "<script>
        alert('Erro no cadastro: o usuário precisa ter Email');
        window.location.href = 'cadastrar.php';
    </script>";
    die();
}
if ($nome == null){
    echo "<script>
        alert('Erro no cadastro: o usuário precisa ter nome');
        window.location.href = 'cadastrar.php';
    </script>";
    die();
}

$sql = "INSERT INTO usuarios (email,nome) VALUES (?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ss", $email,$nome);
$stmt->execute();

header("location: ../../index.php");

