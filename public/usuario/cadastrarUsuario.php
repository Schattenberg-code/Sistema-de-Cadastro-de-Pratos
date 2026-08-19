<?php

include "../../infra/conexao.php";

$email = $_POST["email"];
$nome = $_POST["nome"];

if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Erro no cadastro: informe um e-mail válido');
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

