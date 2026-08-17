<?php

include "../../infra/conexao.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: ../../index.php");
    exit;
}

if (isset($_POST["id"]) && filter_var($_POST["id"], FILTER_VALIDATE_INT) !== false) {
    $id = $_POST["id"];

    $sql = "SELECT * FROM pratos WHERE id=?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $id);
    $stmt->execute();
}

$resultado = $stmt-> get_result();
$prato = $resultado-> fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pratos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Editar Pratos</h1>
    </header>
    <main>
        <h2>Editando o prato <?php echo $prato["nome"]?>!</h2>
        <form action="atualizarPrato.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $prato["id"]?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $prato["nome"]?>">
            <br>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" value="<?php echo $prato["preco"]?>">
            <br>
            <label for="descricao">Descrição:</label>
            <input type="number" name="descricao" value="<?php echo $prato["descricao"]?>">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="number" name="categoria" value="<?php echo $prato["categoria"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>