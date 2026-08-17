<?php
        session_start(); 

        include("infra/conexao.php");
        $usuarios = mysqli_query($conexao, "SELECT * FROM usuarios");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <main>
        <div
            class="w-25 p-5 pb-4 pt-5 container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3 position-absolute top-50 start-50 translate-middle">

            <form action="public/prato/cadastrarPrato.php" method="POST">
                <p class="h2 pb-3 d-flex justify-content-center">Inserir prato</p>
                <div>
                    <label class="form-label" for="nome">Nome do Prato:</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div>
                    <label class="form-label" for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria">
                </div>
                <div>
                    <label class="form-label" for="descricao">Descricao</label>
                    <input class="form-control" type="text" name="descricao">
                </div>
                <div>
                    <label class="form-label" for="preco">Preço</label>
                    <input class="form-control" type="number" name="preco">
                </div>
                <select name="" id="">
                     <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                    <option value="">
                        <td><?php echo $usuario["nome"] ?></td>
                    </option>
                <?php } ?>
                </select>
                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>

        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>