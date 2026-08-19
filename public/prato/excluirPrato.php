<?php
include "../../infra/conexao.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: ../../index.php");
    exit;
}

if (isset($_POST["id_prato"]) && filter_var($_POST["id_prato"], FILTER_VALIDATE_INT) !== false) {
    $id = $_POST["id_prato"];

    $sql = "DELETE FROM pratos WHERE id = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: ../../index.php");
?>