<?php
include "../../infra/conexao.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: ../../index.php");
    exit;
}

if (isset($_POST["id"]) && filter_var($_POST["id"], FILTER_VALIDATE_INT) !== false) {
    $id = $_POST["id"];

    $sql = "DELETE FROM pratos WHERE id = ?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $id);
    $stmt->execute();
}



header("Location: ../../index.php");
?>