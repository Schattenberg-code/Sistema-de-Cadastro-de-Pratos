<?php

include "../../infra/conexao.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: ../../index.php");
    exit;
}

if (isset($_POST["id_prato"]) && filter_var($_POST["id_prato"], FILTER_VALIDATE_INT) !== false) {
    $id = $_POST["id_prato"];

    $sql = "SELECT * FROM pratos WHERE id=?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $id);
    $stmt->execute();
}

$resultado = $stmt->get_result();
$prato = $resultado->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pratos</title>
    <link rel="stylesheet" href="../../style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1>Editar Pratos</h1>
    </header>
    <main>
        <div class="w-25 p-5 pb-4 pt-5 container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3 ">


            <h2>Editando o prato <?php echo $prato["nome"] ?>!</h2>
            <form action="atualizarPrato.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $prato["id"] ?>">
                <div>
                    <label for="nome">Nome:</label>
                    <br>
                    <input type="text" name="nome" value="<?php echo $prato["nome"] ?>">
                </div>

                <div>
                    <label for="preco">Preço:</label>
                    <br>
                    <input type="text" name="preco" value="<?php echo $prato["preco"] ?>">
                </div>

                <div>
                    <label for="descricao">Descrição:</label>
                    <br>
                    <textarea name="descricao" rows="4"><?php echo $prato["descricao"] ?></textarea>
                </div>

                <div>
                    <label for="categoria">Categoria:</label>
                    <br>
                    <input type="text" name="categoria" value="<?php echo $prato["categoria"] ?>">
                </div>


                <button type="submit" id="botaoAtualizar">Atualizar</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>


</body>

</html>