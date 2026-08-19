<?php
function listarUsuario($idUsuario)
{

    global $conexao;

    $sql = "SELECT nome FROM usuarios WHERE id = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();

    $resultado = $stmt -> get_result();
    $usuario = $resultado -> fetch_assoc();

    return $usuario["nome"];
}

?>